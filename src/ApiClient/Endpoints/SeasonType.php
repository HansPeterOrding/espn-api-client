<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use HansPeterOrding\EspnApiClient\Dto\EspnSeasonType;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class SeasonType extends AbstractEndpoint
{
    const URL_TEMPLATE_SEASON_TYPE = 'seasons/%d/types/%d';
    const URL_TEMPLATE_SEASON_TYPES = 'seasons/%d/types';

    public function get(
        int $year,
        int $typeNumber
    ): ?EspnSeasonType
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TYPE,
                $year,
                $typeNumber
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        return $this->espnApiClient->get(
            $url,
            EspnSeasonType::class,
        );
    }

    public function listRefs(int $year): array
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TYPES,
                $year
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

    public function group(): SeasonTypeGroup
    {
        return new SeasonTypeGroup($this->espnApiClient);
    }

    public function week(): SeasonTypeWeek
    {
        return new SeasonTypeWeek($this->espnApiClient);
    }

    public function team(): SeasonTeam
    {
        return new SeasonTeam($this->espnApiClient);
    }
}
