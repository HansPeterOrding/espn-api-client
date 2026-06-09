<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use Psr\Http\Message\UriInterface;

abstract class AbstractEndpoint
{
    public function __construct(
        protected readonly EspnApiClientInterface $espnApiClient,
    ) {
    }

    public function uri(
        string $path,
        array $attributes = [],
        string $baseUri = EspnApiClientInterface::BASE_URI_SPORTS_CORE
    ): UriInterface {
        $uri = $baseUri . $path;
        if ($attributes) {
            $uri .= '?' . preg_replace('/%5B[0-9]+%5D/simU', '%5B%5D', http_build_query($attributes));
        }

        return $this->espnApiClient->getUriFactory()->createUri($uri);
    }

    protected function extractRefs(array $data): array
    {
        $rows = [];
        foreach ($data['items'] ?? [] as $item) {
            $rows[] = $item['$ref'] ?? $item;
        }
        return $rows;
    }
}
