<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnCompetitionStatus;

class EspnCompetitionStatuses extends AbstractEndpoint
{
    const URL_TEMPLATE_EVENT_COMPETITION_STATUS = 'events/%d/competitions/%d/status';

    public function get(int $eventId, int $competitionId): ?EspnCompetitionStatus
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_EVENT_COMPETITION_STATUS, $eventId, $competitionId)
        );

        return $this->espnApiClient->get($url, EspnCompetitionStatus::class);
    }
}
