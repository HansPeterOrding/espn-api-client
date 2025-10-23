<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnSchedule;
use HansPeterOrding\EspnApiClient\Dto\EspnTeam as TeamDto;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class Team extends AbstractEndpoint
{
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
