<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnEvent;

class EspnEvents extends AbstractEndpoint
{
    const string URL_TEMPLATE_EVENT = 'events/%d';
    const string URL_TEMPLATE_SEASON_TYPE_WEEK_EVENTS = 'seasons/%d/types/%d/weeks/%d/events';

    public function get(int $eventId): ?EspnEvent
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_EVENT, $eventId));

        return $this->espnApiClient->get($url, EspnEvent::class);
    }

    public function listRefsForWeek(int $year, int $typeId, int $weekNumber): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_TYPE_WEEK_EVENTS, $year, $typeId, $weekNumber),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function competitions(): EspnCompetitions
    {
        return new EspnCompetitions($this->espnApiClient);
    }
}
