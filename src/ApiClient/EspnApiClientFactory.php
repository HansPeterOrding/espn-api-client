<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient;

use Http\Client\Common\Plugin\ContentTypePlugin;
use Http\Client\Common\Plugin\CookiePlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Client\Common\Plugin\RetryPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\CookieJar;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\Psr18Client;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class EspnApiClientFactory
{
    public function getEspnApiClient(
        ?ClientInterface $client = null,
        ?LoggerInterface $logger = null
    ): EspnApiClientInterface {
        $client = $client ?? Psr18ClientDiscovery::find();
        $uriFactory = Psr17FactoryDiscovery::findUriFactory();
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();

        $plugins = [];

        if(null !== $logger) {
            $plugins[] = new LoggerPlugin($logger, new FullHttpMessageFormatter(5000));
        }

        $plugins[] = new ContentTypePlugin();
        $plugins[] = new HeaderDefaultsPlugin([
            'Accept' => EspnApiClientInterface::ACCEPT_JSON,
            'User-Agent' => EspnApiClientInterface::USER_AGENT
        ]);
        $plugins[] = new RetryPlugin([
            'retries' => 3
        ]);

        $pluginClient = new PluginClient(
            $client,
            $plugins
        );

        $phpDocExtractor = new PhpDocExtractor();
        $reflectionExtractor = new ReflectionExtractor();
        $propertyInfo = new PropertyInfoExtractor(
            typeExtractors: [$phpDocExtractor, $reflectionExtractor]
        );

        $encoders = [new JsonEncoder()];
        $normalizers = [
            new UnwrappingDenormalizer(),
            new ObjectNormalizer(
                null,
                new CamelCaseToSnakeCaseNameConverter(),
                null,
                propertyTypeExtractor: $propertyInfo
            ),
            new DateTimeNormalizer(),
            new ArrayDenormalizer(),

        ];
        $serializer = new Serializer($normalizers, $encoders);

        return new EspnApiClient($pluginClient, $uriFactory, $requestFactory, $serializer);
    }
}
