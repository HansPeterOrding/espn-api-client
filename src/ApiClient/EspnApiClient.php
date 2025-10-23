<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient;

use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\Team;
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
    public function get(UriInterface $uri, ?string $return = null, $context = [])
    {
        $request = $this->requestFactory->createRequest('GET', $uri);
        $response = $this->client->sendRequest($request);
        $this->handleResponseCode($request, $response);

        $contents = $response->getBody()->getContents();

        if ($contents === 'null') {
            return null;
        }

        return $this->serializer->deserialize(
            $contents,
            $return,
            'json',
            $context
        );
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

    public function team(): Team
    {
        return new Team($this);
    }
}
