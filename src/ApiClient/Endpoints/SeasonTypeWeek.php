<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use HansPeterOrding\EspnApiClient\Dto\EspnSeasonType;
use HansPeterOrding\EspnApiClient\Dto\EspnSeasonTypeWeek;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class SeasonTypeWeek extends AbstractEndpoint
{
    const URL_TEMPLATE_SEASON_TYPE_WEEK = 'seasons/%d/types/%d/weeks/%d';
    const URL_TEMPLATE_SEASON_TYPE_WEEKS = 'seasons/%d/types/%d/weeks';

    public function get(
        int $year,
        int $typeNumber,
        int $weekNumber
    ): ?EspnSeasonTypeWeek
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TYPE_WEEK,
                $year,
                $typeNumber,
                $weekNumber
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        return $this->espnApiClient->get(
            $url,
            EspnSeasonTypeWeek::class,
        );
    }

    public function listRefs(int $year, int $typeNumber): array
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TYPE_WEEKS,
                $year,
                $typeNumber
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        $data = $this->espnApiClient->decodeJson($url);
        $rows = [];
        foreach ($data['items'] ?? [] as $item) {
            $rows[] = $item['$ref'] ?? $item;
        }

        return $rows;
    }
}
