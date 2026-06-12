<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnRecord;

class EspnRecords extends AbstractEndpoint
{
    const string URL_TEMPLATE_SEASON_TYPE_TEAM_RECORDS = 'seasons/%d/types/%d/teams/%d/records';
    const string URL_TEMPLATE_SEASON_TYPE_TEAM_RECORD = 'seasons/%d/types/%d/teams/%d/records/%d';
    const string URL_TEMPLATE_SEASON_TYPE_GROUP_TEAM_RECORD = 'seasons/%d/types/%d/groups/%d/teams/%d/records/%d';

    public function get(int $year, int $typeId, int $teamId, int $recordId): ?EspnRecord
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_TEAM_RECORD, $year, $typeId, $teamId, $recordId)
        );

        return $this->espnApiClient->get($url, EspnRecord::class);
    }

    public function getForGroup(int $year, int $typeId, int $groupId, int $teamId, int $recordId): ?EspnRecord
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_GROUP_TEAM_RECORD, $year, $typeId, $groupId, $teamId, $recordId)
        );

        return $this->espnApiClient->get($url, EspnRecord::class);
    }

    public function listRefs(int $year, int $typeId, int $teamId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_TEAM_RECORDS, $year, $typeId, $teamId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }
}
