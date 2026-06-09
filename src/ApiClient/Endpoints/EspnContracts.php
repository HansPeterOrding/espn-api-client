<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnContract;

class EspnContracts extends AbstractEndpoint
{
    const URL_TEMPLATE_ATHLETE_CONTRACT = 'athletes/%d/contracts/%d';

    public function get(int $athleteId, int $seasonYear): ?EspnContract
    {
        $url = $this->uri(
            sprintf(self::URL_TEMPLATE_ATHLETE_CONTRACT, $athleteId, $seasonYear)
        );

        return $this->espnApiClient->get($url, EspnContract::class);
    }
}
