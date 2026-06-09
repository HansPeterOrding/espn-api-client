<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnSeason;

class EspnSeasons extends AbstractEndpoint
{
    const URL_TEMPLATE_SEASONS = 'seasons';
    const URL_TEMPLATE_SEASON = 'seasons/%d';

    public function get(int $year): ?EspnSeason
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON, $year));

        return $this->espnApiClient->get($url, EspnSeason::class);
    }

    public function listRefs(): array
    {
        $url = $this->uri(self::URL_TEMPLATE_SEASONS, ['limit' => 100]);
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function seasonTypes(): EspnSeasonTypes
    {
        return new EspnSeasonTypes($this->espnApiClient);
    }

    public function teams(): EspnTeams
    {
        return new EspnTeams($this->espnApiClient);
    }

    public function athletes(): EspnAthletes
    {
        return new EspnAthletes($this->espnApiClient);
    }

    public function coaches(): EspnCoaches
    {
        return new EspnCoaches($this->espnApiClient);
    }
}
