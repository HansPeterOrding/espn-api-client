<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnInjury;

class EspnInjuries extends AbstractEndpoint
{
    const string URL_TEMPLATE_SEASON_ATHLETE_INJURIES = 'seasons/%d/athletes/%d/injuries';
    const string URL_TEMPLATE_SEASON_ATHLETE_INJURY = 'seasons/%d/athletes/%d/injuries/%d';
    const string URL_TEMPLATE_TEAM_INJURIES = 'teams/%d/injuries';

    public function get(int $year, int $athleteId, int $injuryId): ?EspnInjury
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_ATHLETE_INJURY, $year, $athleteId, $injuryId)
        );

        return $this->espnApiClient->get($url, EspnInjury::class);
    }

    public function listRefs(int $year, int $athleteId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_ATHLETE_INJURIES, $year, $athleteId),
            ['limit' => 50]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function listRefsForTeam(int $teamId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_TEAM_INJURIES, $teamId),
            ['limit' => 200]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }
}
