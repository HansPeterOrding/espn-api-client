<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
use HansPeterOrding\EspnApiClient\Dto\EspnSeasonType;
use HansPeterOrding\EspnApiClient\Dto\EspnSeasonTypeGroup;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer;

class SeasonTypeGroup extends AbstractEndpoint
{
    const URL_TEMPLATE_SEASON_TYPE_GROUP = 'seasons/%d/types/%d/groups/%d';
    const URL_TEMPLATE_SEASON_TYPE_GROUPS = 'seasons/%d/types/%d/groups';
    const URL_TEMPLATE_SEASON_TYPE_GROUP_CHILDREN = 'seasons/%d/types/%d/groups/%d/children';

    public function get(
        int $year,
        int $typeNumber,
        int $groupId
    ): ?EspnSeasonTypeGroup
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TYPE_GROUP,
                $year,
                $typeNumber,
                $groupId
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        return $this->espnApiClient->get(
            $url,
            EspnSeasonTypeGroup::class,
        );
    }

    public function listRefs(int $year, int $typeNumber): array
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TYPE_GROUPS,
                $year,
                $typeNumber
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        $data = $this->espnApiClient->decodeJson($url);
        $rows = [];
        foreach ($data['items'] ?? [] as $item) {
            $rows[] = $item['$ref'] ?? $item;
        }

        return $rows;
    }

    public function listChildrenRefs(int $year, int $typeNumber, int $groupId): array
    {
        $url = $this->uri(
            sprintf(
                self::URL_TEMPLATE_SEASON_TYPE_GROUP_CHILDREN,
                $year,
                $typeNumber,
                $groupId
            ),
            [],
            EspnApiClientInterface::BASE_URI_SPORTS_CORE
        );

        $data = $this->espnApiClient->decodeJson($url);
        $rows = [];
        foreach ($data['items'] ?? [] as $item) {
            $rows[] = $item['$ref'] ?? $item;
        }

        return $rows;
    }
}
