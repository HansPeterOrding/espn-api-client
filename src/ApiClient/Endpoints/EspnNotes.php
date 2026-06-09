<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnNote;

class EspnNotes extends AbstractEndpoint
{
    const URL_TEMPLATE_SEASON_ATHLETE_NOTES = 'seasons/%d/athletes/%d/notes';
    const URL_TEMPLATE_TEAM_NOTES = 'teams/%d/notes';

    /**
     * @return EspnNote[]
     */
    public function listForAthlete(int $year, int $athleteId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_SEASON_ATHLETE_NOTES, $year, $athleteId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        $notes = [];
        foreach ($data['items'] ?? [] as $item) {
            $notes[] = $this->espnApiClient->denormalize($item, EspnNote::class);
        }

        return $notes;
    }

    /**
     * @return EspnNote[]
     */
    public function listForTeam(int $teamId): array
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_TEAM_NOTES, $teamId),
            ['limit' => 100]
        );
        $data = $this->espnApiClient->decodeJson($url);

        $notes = [];
        foreach ($data['items'] ?? [] as $item) {
            $notes[] = $this->espnApiClient->denormalize($item, EspnNote::class);
        }

        return $notes;
    }
}
