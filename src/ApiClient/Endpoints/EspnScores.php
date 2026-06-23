<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnScore;

class EspnScores extends AbstractEndpoint
{
    const string URL_TEMPLATE_EVENT_COMPETITION_COMPETITOR_SCORE = 'events/%d/competitions/%d/competitors/%d/score';

    public function get(int $eventId, int $competitionId, int $competitorId): ?EspnScore
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_EVENT_COMPETITION_COMPETITOR_SCORE, $eventId, $competitionId, $competitorId)
        );

        return $this->espnApiClient->get($url, EspnScore::class);
    }
}
