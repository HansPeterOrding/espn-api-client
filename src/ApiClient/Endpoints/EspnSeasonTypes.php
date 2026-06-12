<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnSeasonType;

class EspnSeasonTypes extends AbstractEndpoint
{
    const string URL_TEMPLATE_SEASON_TYPES = 'seasons/%d/types';
    const string URL_TEMPLATE_SEASON_TYPE = 'seasons/%d/types/%d';

    public function get(int $year, int $typeId): ?EspnSeasonType
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_TYPE, $year, $typeId));

        return $this->espnApiClient->get($url, EspnSeasonType::class);
    }

    public function listRefs(int $year): array
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_TYPES, $year), ['limit' => 100]);
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function seasonGroups(): EspnSeasonGroups
    {
        return new EspnSeasonGroups($this->espnApiClient);
    }

    public function weeks(): EspnWeeks
    {
        return new EspnWeeks($this->espnApiClient);
    }
}
