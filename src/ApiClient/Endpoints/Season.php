<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use HansPeterOrding\EspnApiClient\Dto\EspnSeason;
use HansPeterOrding\EspnApiClient\Dto\EspnSeasonTeam;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class Season extends AbstractEndpoint {
    public function get(
        int $year
    ): ?EspnSeason
    {
        $url = $this->uri(
            sprintf(
                'seasons/%s',
                $year
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );


        return $this->espnApiClient->get(
            $url,
            EspnSeason::class,
        );
    }

    public function team(): SeasonTeam
    {
        return new SeasonTeam($this->espnApiClient);
    }

    public function type(): SeasonType
    {
        return new SeasonType($this->espnApiClient);
    }
}
