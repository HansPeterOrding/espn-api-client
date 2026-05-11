<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use HansPeterOrding\EspnApiClient\Dto\EspnSchedule;
use HansPeterOrding\EspnApiClient\Dto\EspnSeasonTeam;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class SeasonTeam extends AbstractEndpoint {
    const URL_TEMPLATE_SEASON_TEAMS = 'seasons/%d/teams';
    const URL_TEMPLATE_SEASON_TEAM = 'seasons/%d/teams/%d';

//    public function list(): array
//    {
//        $url = $this->uri(
//            sprintf(
//                'teams',
//            ),
//            [],
//            EspnApiClientInterface::BASE_URI_SITE
//        );
//
//        $data = $this->espnApiClient->decodeJson($url);
//        $rows = [];
//        foreach ($data['sports'] ?? [] as $sport) {
//            foreach ($sport['leagues'] ?? [] as $league) {
//                foreach ($league['teams'] ?? [] as $teamRow) {
//                    // ESPN liefert oft { "team": { ... } }
//                    $rows[] = $teamRow['team'] ?? $teamRow;
//                }
//            }
//        }
//
//        $teams = $this->espnApiClient->denormalize($rows, EspnSeasonTeam::class.'[]');
//
//        return $teams;
//    }

    public function listRefs(int $year): array
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TEAMS,
                $year
            ),
            [
                'limit' => 100
            ],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        $data = $this->espnApiClient->decodeJson($url);
        $rows = [];
        foreach ($data['items'] ?? [] as $item) {
            $rows[] = $item['$ref'] ?? $item;
        }

        return $rows;
    }

    public function get(
        int $year,
        int $teamId
    ): ?EspnSeasonTeam
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TEAM,
                $year,
                $teamId
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        return $this->espnApiClient->get(
            $url,
            EspnSeasonTeam::class,
        );
    }

    public function record(): SeasonTypeTeamRecord
    {
        return new SeasonTypeTeamRecord($this->espnApiClient);
    }

//    public function schedule(string $id): ?EspnSchedule
//    {
//        $url = $this->uri(
//            sprintf(
//                'teams/%s/schedule',
//                $id
//            )
//        );
//
//        return $this->espnApiClient->get(
//            $url,
//            EspnSchedule::class
//        );
//    }
}
