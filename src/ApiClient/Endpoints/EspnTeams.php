<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnTeam;

class EspnTeams extends AbstractEndpoint
{
    const URL_TEMPLATE_SEASON_TEAMS = 'seasons/%d/teams';
    const URL_TEMPLATE_SEASON_TEAM = 'seasons/%d/teams/%d';
    const URL_TEMPLATE_SEASON_TYPE_GROUP_TEAMS = 'seasons/%d/types/%d/groups/%d/teams';
    const URL_TEMPLATE_SEASON_TYPE_GROUP_TEAM = 'seasons/%d/types/%d/groups/%d/teams/%d';

    public function get(int $year, int $teamId): ?EspnTeam
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_TEAM, $year, $teamId));

        return $this->espnApiClient->get($url, EspnTeam::class);
    }

    public function getForSeasonGroup(int $year, int $typeId, int $groupId, int $teamId): ?EspnTeam
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_GROUP_TEAM, $year, $typeId, $groupId, $teamId)
        );

        return $this->espnApiClient->get($url, EspnTeam::class);
    }

    public function listRefs(int $year): array
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_TEAMS, $year), ['limit' => 100]);
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function listRefsForSeasonGroup(int $year, int $typeId, int $groupId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_GROUP_TEAMS, $year, $typeId, $groupId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function records(): EspnRecords
    {
        return new EspnRecords($this->espnApiClient);
    }

    public function notes(): EspnNotes
    {
        return new EspnNotes($this->espnApiClient);
    }

    public function injuries(): EspnInjuries
    {
        return new EspnInjuries($this->espnApiClient);
    }
}
