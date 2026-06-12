<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

use HansPeterOrding\EspnApiClient\Dto\EspnFranchise;

class EspnFranchises extends AbstractEndpoint
{
    const string URL_TEMPLATE_FRANCHISES = 'franchises';
    const string URL_TEMPLATE_FRANCHISE = 'franchises/%d';

    public function get(int $franchiseId): ?EspnFranchise
    {
        $url = $this->uri(sprintf(self::URL_TEMPLATE_FRANCHISE, $franchiseId));

        return $this->espnApiClient->get($url, EspnFranchise::class);
    }

    public function listRefs(): array
    {
        $url = $this->uri(self::URL_TEMPLATE_FRANCHISES, ['limit' => 100]);
        $data = $this->espnApiClient->decodeJson($url);

        return $this->extractRefs($data);
    }
}
