<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnVenue;

class EspnVenues extends AbstractEndpoint
{
    const string URL_TEMPLATE_VENUES = 'venues';
    const string URL_TEMPLATE_VENUE = 'venues/%d';

    public function get(int $venueId): ?EspnVenue
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_VENUE, $venueId));

        return $this->espnApiClient->get($url, EspnVenue::class);
    }

    public function listRefs(): array
    {
        $url = $this->uri(self::URL_TEMPLATE_VENUES, ['limit' => 100]);
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }
}
