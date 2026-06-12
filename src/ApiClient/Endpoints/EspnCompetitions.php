<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnCompetition;

class EspnCompetitions extends AbstractEndpoint
{
    const string URL_TEMPLATE_EVENT_COMPETITIONS = 'events/%d/competitions';
    const string URL_TEMPLATE_EVENT_COMPETITION = 'events/%d/competitions/%d';

    public function get(int $eventId, int $competitionId): ?EspnCompetition
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_EVENT_COMPETITION, $eventId, $competitionId));

        return $this->espnApiClient->get($url, EspnCompetition::class);
    }

    public function listRefs(int $eventId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_EVENT_COMPETITIONS, $eventId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }

    public function competitors(): EspnCompetitors
    {
        return new EspnCompetitors($this->espnApiClient);
    }

    public function officials(): EspnOfficials
    {
        return new EspnOfficials($this->espnApiClient);
    }

    public function status(): EspnCompetitionStatuses
    {
        return new EspnCompetitionStatuses($this->espnApiClient);
    }
}
