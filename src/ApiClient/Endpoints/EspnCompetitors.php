<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnCompetitor;

class EspnCompetitors extends AbstractEndpoint
{
    const string URL_TEMPLATE_EVENT_COMPETITION_COMPETITORS = 'events/%d/competitions/%d/competitors';
    const string URL_TEMPLATE_EVENT_COMPETITION_COMPETITOR = 'events/%d/competitions/%d/competitors/%d';

    public function get(int $eventId, int $competitionId, int $competitorId): ?EspnCompetitor
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_EVENT_COMPETITION_COMPETITOR, $eventId, $competitionId, $competitorId)
        );

        return $this->espnApiClient->get($url, EspnCompetitor::class);
    }

    public function listRefs(int $eventId, int $competitionId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_EVENT_COMPETITION_COMPETITORS, $eventId, $competitionId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function scores(): EspnScores
    {
        return new EspnScores($this->espnApiClient);
    }
}
