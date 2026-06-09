<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnAthlete;
use HansPeterOrding\EspnApiClient\Dto\EspnContract;

class EspnAthletes extends AbstractEndpoint
{
    const URL_TEMPLATE_SEASON_ATHLETES = 'seasons/%d/athletes';
    const URL_TEMPLATE_SEASON_ATHLETE = 'seasons/%d/athletes/%d';
    const URL_TEMPLATE_SEASON_TEAM_ATHLETES = 'seasons/%d/teams/%d/athletes';

    public function get(int $year, int $athleteId): ?EspnAthlete
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_ATHLETE, $year, $athleteId));

        return $this->espnApiClient->get($url, EspnAthlete::class);
    }

    public function listRefs(int $year): array
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_ATHLETES, $year), ['limit' => 1000]);
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function listRefsForTeam(int $year, int $teamId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TEAM_ATHLETES, $year, $teamId),
            ['limit' => 200]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function contracts(): EspnContracts
    {
        return new EspnContracts($this->espnApiClient);
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
