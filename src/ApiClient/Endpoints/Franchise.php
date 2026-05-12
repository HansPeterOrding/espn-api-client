<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use HansPeterOrding\EspnApiClient\Dto\EspnFranchise;
use HansPeterOrding\EspnApiClient\Dto\EspnSchedule;
use HansPeterOrding\EspnApiClient\Dto\EspnSeasonTeam;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class Franchise extends AbstractEndpoint {
    const URL_TEMPLATE_FRANCHISES = 'franchises';
    const URL_TEMPLATE_FRANCHISE = 'franchises/%d';

    public function listRefs(): array
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_FRANCHISES
            ),
            [
                'limit' => 100
            ],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        $data = $this->espnApiClient->decodeJson($url);
        $rows = [];
        foreach ($data['items'] ?? [] as $item) {
            $rows[] = $item['$ref'] ?? $item;
        }

        return $rows;
    }

    public function get(
        int $franchiseId,
    ): ?EspnFranchise
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_FRANCHISE,
                $franchiseId
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        return $this->espnApiClient->get(
            $url,
            EspnFranchise::class,
        );
    }
}
