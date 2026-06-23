<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnSeasonGroup;

class EspnSeasonGroups extends AbstractEndpoint
{
    const string URL_TEMPLATE_SEASON_TYPE_GROUPS = 'seasons/%d/types/%d/groups';
    const string URL_TEMPLATE_SEASON_TYPE_GROUP = 'seasons/%d/types/%d/groups/%d';
    const string URL_TEMPLATE_SEASON_TYPE_GROUP_CHILDREN = 'seasons/%d/types/%d/groups/%d/children';
    const string URL_TEMPLATE_SEASON_TYPE_TEAM_GROUPS = 'seasons/%d/types/%d/teams/%d/groups';

    public function get(int $year, int $typeId, int $groupId): ?EspnSeasonGroup
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_TYPE_GROUP, $year, $typeId, $groupId));

        return $this->espnApiClient->get($url, EspnSeasonGroup::class);
    }

    public function listRefs(int $year, int $typeId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_GROUPS, $year, $typeId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function listChildRefs(int $year, int $typeId, int $groupId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_GROUP_CHILDREN, $year, $typeId, $groupId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function listRefsForTeam(int $year, int $typeId, int $teamId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_TEAM_GROUPS, $year, $typeId, $teamId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function standings(): EspnStandings
    {
        return new EspnStandings($this->espnApiClient);
    }

    public function teams(): EspnTeams
    {
        return new EspnTeams($this->espnApiClient);
    }
}
