<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use HansPeterOrding\EspnApiClient\Dto\EspnSchedule;
use HansPeterOrding\EspnApiClient\Dto\EspnTeam;
use HansPeterOrding\EspnApiClient\Dto\EspnTeam as TeamDto;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class Team extends AbstractEndpoint {
    public function list(): array
    {
        $url = $this->uri(
            sprintf(
                'teams',
            ),
            [],
            EspnApiClientInterface::BASE_URI_SITE
        );

        $data = $this->espnApiClient->decodeJson($url);
        $rows = [];
        foreach ($data['sports'] ?? [] as $sport) {
            foreach ($sport['leagues'] ?? [] as $league) {
                foreach ($league['teams'] ?? [] as $teamRow) {
                    // ESPN liefert oft { "team": { ... } }
                    $rows[] = $teamRow['team'] ?? $teamRow;
                }
            }
        }

        $teams = $this->espnApiClient->denormalize($rows, EspnTeam::class.'[]');

        return $teams;
    }

    public function get(
        string $teamId
    ): ?TeamDto
    {
        $url = $this->uri(
            sprintf(
                'teams/%s',
                $teamId
            )
        );

        return $this->espnApiClient->get(
            $url,
            TeamDto::class,
            [UnwrappingDenormalizer::UNWRAP_PATH => '[team]']
        );
    }

    public function schedule(string $id): ?EspnSchedule
    {
        $url = $this->uri(
            sprintf(
                'teams/%s/schedule',
                $id
            )
        );

        return $this->espnApiClient->get(
            $url,
            EspnSchedule::class
        );
    }
}
