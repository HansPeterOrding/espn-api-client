<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use HansPeterOrding\EspnApiClient\Dto\EspnSchedule;
use HansPeterOrding\EspnApiClient\Dto\EspnTeam as TeamDto;
use HansPeterOrding\EspnApiClient\Dto\EspnVenue as VenueDto;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class Venue extends AbstractEndpoint {
    public function listRefs(): array
    {
        $url = $this->uri(
            sprintf(
                'venues',
            ),
            [
                'limit' => 1000
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

    public function listIds(): array
    {
        $refs = $this->listRefs();

        $ids = [];
        foreach($refs as $ref) {
            preg_match('~/venues/(\d+)~', $ref, $m);
            $id = (int)($m[1] ?? null);
            if($id) {
                $ids[] = (string)$id;
            }
        }

        return $ids;
    }

    public function get(
        string $venueId
    ): ?VenueDto
    {
        $url = $this->uri(
            sprintf(
                'venues/%s',
                $venueId
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        return $this->espnApiClient->get(
            $url,
            VenueDto::class
        );
    }
}
