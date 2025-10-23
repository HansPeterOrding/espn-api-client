<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient;

use HansPeterOrding\EspnApiClient\ApiClient\Endpoints\Team;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use Symfony\Component\Serializer\SerializerInterface;

interface EspnApiClientInterface
{
    public const BASE_URI = 'https://site.api.espn.com/apis/site/v2/sports/football/nfl/';
    public const CONTENT_TYPE_JSON = 'application/json';

    public const ACCEPT_JSON = self::CONTENT_TYPE_JSON;

    public const USER_AGENT = 'EspnApiClient 1.0';

    public function getClient(): ClientInterface;

    public function getUriFactory(): UriFactoryInterface;

    public function getRequestFactory(): RequestFactoryInterface;

    public function getSerializer(): SerializerInterface;

    public function get(UriInterface $uri, ?string $return = null);

    public function team(): Team;
}
