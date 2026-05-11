<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use HansPeterOrding\EspnApiClient\Dto\EspnSeasonTypeTeamRecord;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class SeasonTypeTeamRecord extends AbstractEndpoint {
    const URL_TEMPLATE_SEASON_TYPE_TEAM_RECORDS = 'seasons/%d/types/%d/teams/%d/records';
    const URL_TEMPLATE_SEASON_TYPE_TEAM_RECORD = 'seasons/%d/types/%d/teams/%d/records/%d';

    public function listRefs(int $year, int $typeId, int $teamId): array
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TYPE_TEAM_RECORDS,
                $year,
                $typeId,
                $teamId
            ),
            [
                'limit' => 1000
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
        int $year,
        int $typeId,
        int $teamId,
        int $recordId
    ): ?EspnSeasonTypeTeamRecord
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TYPE_TEAM_RECORD,
                $year,
                $typeId,
                $teamId,
                $recordId
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        return $this->espnApiClient->get(
            $url,
            EspnSeasonTypeTeamRecord::class,
        );
    }
}
