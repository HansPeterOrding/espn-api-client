<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnPosition;

class EspnPositions extends AbstractEndpoint
{
    const URL_TEMPLATE_POSITIONS = 'positions';
    const URL_TEMPLATE_POSITION = 'positions/%d';

    public function get(int $positionId): ?EspnPosition
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_POSITION, $positionId));

        return $this->espnApiClient->get($url, EspnPosition::class);
    }

    public function listRefs(): array
    {
        $url = $this->uri(self::URL_TEMPLATE_POSITIONS, ['limit' => 100]);
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }
}
