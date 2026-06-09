<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnOfficial;

class EspnOfficials extends AbstractEndpoint
{
    const URL_TEMPLATE_EVENT_COMPETITION_OFFICIALS = 'events/%d/competitions/%d/officials';
    const URL_TEMPLATE_EVENT_COMPETITION_OFFICIAL = 'events/%d/competitions/%d/officials/%d';

    public function get(int $eventId, int $competitionId, int $officialId): ?EspnOfficial
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_EVENT_COMPETITION_OFFICIAL, $eventId, $competitionId, $officialId)
        );

        return $this->espnApiClient->get($url, EspnOfficial::class);
    }

    public function listRefs(int $eventId, int $competitionId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_EVENT_COMPETITION_OFFICIALS, $eventId, $competitionId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }
}
