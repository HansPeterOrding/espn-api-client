<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient;

use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\EspnAthletes;
use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\EspnEvents;
use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\EspnFranchises;
use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\EspnPositions;
use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\EspnSeasons;
use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\EspnVenues;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\BadRequestException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\ClientErrorException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\ForbiddenException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\NotFoundException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\ServerErrorException;
use HansPeterOrding\EspnApiClient\ApiClient\Exception\UnauthorizedException;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use Symfony\Component\Serializer\SerializerInterface;

readonly class EspnApiClient implements EspnApiClientInterface
{
    public function __construct(
        private ClientInterface         $client,
        private UriFactoryInterface     $uriFactory,
        private RequestFactoryInterface $requestFactory,
        private SerializerInterface     $serializer,
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

    public function get(UriInterface $uri, ?string $returnType = null, $context = [])
    {
        $contents = $this->getJson($uri);

        if (null === $contents) {
            return null;
        }

        return $this->deserializeJson($contents, $returnType, $context);
    }

    public function getJson(UriInterface $uri): ?string
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

        if (null === $contents) {
            return [];
        }

        return $this->serializer->decode($contents, 'json');
    }

    public function deserializeJson(string $contents, ?string $returnType = null, $context = [])
    {
        return $this->serializer->deserialize($contents, $returnType, 'json', $context);
    }

    public function denormalize(mixed $content, ?string $returnType = null, ?string $format = null, array $context = [])
    {
        return $this->serializer->denormalize($content, $returnType, $format, $context);
    }

    private function handleResponseCode(RequestInterface $request, ResponseInterface $response): void
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

    public function seasons(): EspnSeasons
    {
        return new EspnSeasons($this);
    }

    public function venues(): EspnVenues
    {
        return new EspnVenues($this);
    }

    public function franchises(): EspnFranchises
    {
        return new EspnFranchises($this);
    }

    public function events(): EspnEvents
    {
        return new EspnEvents($this);
    }

    public function positions(): EspnPositions
    {
        return new EspnPositions($this);
    }

    public function athletes(): EspnAthletes
    {
        return new EspnAthletes($this);
    }
}
