<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnCoach;

class EspnCoaches extends AbstractEndpoint
{
    const URL_TEMPLATE_SEASON_COACHES = 'seasons/%d/coaches';
    const URL_TEMPLATE_SEASON_COACH = 'seasons/%d/coaches/%d';
    const URL_TEMPLATE_SEASON_TEAM_COACHES = 'seasons/%d/teams/%d/coaches';

    public function get(int $year, int $coachId): ?EspnCoach
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_COACH, $year, $coachId));

        return $this->espnApiClient->get($url, EspnCoach::class);
    }

    public function listRefs(int $year): array
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_COACHES, $year), ['limit' => 100]);
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function listRefsForTeam(int $year, int $teamId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TEAM_COACHES, $year, $teamId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }
}
