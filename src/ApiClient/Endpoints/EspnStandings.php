<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

class EspnStandings extends AbstractEndpoint
{
    const string URL_TEMPLATE_SEASON_TYPE_GROUP_STANDINGS = 'seasons/%d/types/%d/groups/%d/standings';
    const string URL_TEMPLATE_SEASON_TYPE_GROUP_STANDING = 'seasons/%d/types/%d/groups/%d/standings/%d';

    public function getAsArray(int $year, int $typeId, int $groupId, int $standingId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_GROUP_STANDING, $year, $typeId, $groupId, $standingId)
        );

        return $this->espnApiClient->decodeJson($url) ?? [];
    }

    public function listRefs(int $year, int $typeId, int $groupId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_GROUP_STANDINGS, $year, $typeId, $groupId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }
}
