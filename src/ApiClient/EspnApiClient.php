<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient;

use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\Season;
use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\Team;
use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\Venue;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\BadRequestException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\ClientErrorException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\ForbiddenException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\NotFoundException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\ServerErrorException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\UnauthorizedException;
use HansPeterOrding\EspnApiSymfonyBundle\Entity\EspnTeam;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use Symfony\Component\Serializer\SerializerInterface;

class EspnApiClient implements EspnApiClientInterface
{
    public function __construct(
        private readonly ClientInterface         $client,
        private readonly UriFactoryInterface     $uriFactory,
        private readonly RequestFactoryInterface $requestFactory,
        private readonly SerializerInterface     $serializer
    )
    {
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    public function getUriFactory(): UriFactoryInterface
    {
        return $this->uriFactory;
    }

    public function getRequestFactory(): RequestFactoryInterface
    {
        return $this->requestFactory;
    }

    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

    /**
     * @param callable[] $jsonManipulationCallables
     */
    public function get(UriInterface $uri, ?string $returnType = null, $context = [])
    {
        $contents = $this->getJson($uri);

        return $this->deserializeJson(
            $contents,
            $returnType,
            $context
        );
    }

    public function getJson(UriInterface $uri)
    {
        $request = $this->requestFactory->createRequest('GET', $uri);
        $response = $this->client->sendRequest($request);
        $this->handleResponseCode($request, $response);

        $contents = $response->getBody()->getContents();

        if ($contents === 'null') {
            return null;
        }

        return $contents;
    }

    public function decodeJson(UriInterface $uri)
    {
        $contents = $this->getJson($uri);

        return $this->serializer->decode($contents, 'json');
    }

    public function deserializeJson(string $contents, string $returnType = null, $context = [])
    {
        return $this->serializer->deserialize($contents, $returnType, 'json', $context);
    }

    public function denormalize(mixed $content, ?string $returnType = null, ?string $format = null, array $context = [])
    {
        return $this->serializer->denormalize($content, $returnType, $format);
    }

    private function handleResponseCode(RequestInterface $request, ResponseInterface $response)
    {
        if (400 === $response->getStatusCode()) {
            throw BadRequestException::create($request, $response);
        }

        if (401 === $response->getStatusCode()) {
            throw UnauthorizedException::create($request, $response);
        }

        if (403 === $response->getStatusCode()) {
            throw ForbiddenException::create($request, $response);
        }

        if (404 === $response->getStatusCode()) {
            throw NotFoundException::create($request, $response);
        }

        if ($response->getStatusCode() >= 400 && $response->getStatusCode() <= 499) {
            throw ClientErrorException::create($request, $response);
        }

        if ($response->getStatusCode() >= 500 && $response->getStatusCode() <= 599) {
            throw ServerErrorException::create($request, $response);
        }
    }

    public function season(): Season
    {
        return new Season($this);
    }

    public function venue(): Venue
    {
        return new Venue($this);
    }
}
