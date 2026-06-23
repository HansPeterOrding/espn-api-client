<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnWeek;

class EspnWeeks extends AbstractEndpoint
{
    const string URL_TEMPLATE_SEASON_TYPE_WEEKS = 'seasons/%d/types/%d/weeks';
    const string URL_TEMPLATE_SEASON_TYPE_WEEK = 'seasons/%d/types/%d/weeks/%d';

    public function get(int $year, int $typeId, int $weekNumber): ?EspnWeek
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON_TYPE_WEEK, $year, $typeId, $weekNumber));

        return $this->espnApiClient->get($url, EspnWeek::class);
    }

    public function listRefs(int $year, int $typeId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_WEEKS, $year, $typeId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function events(): EspnEvents
    {
        return new EspnEvents($this->espnApiClient);
    }
}
