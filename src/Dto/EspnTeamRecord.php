<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnTeamRecord
{
    /**
     * @var EspnTeamRecordItem[]
     */
    private array $items;

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): EspnTeamRecord
    {
        $this->items = $items;
        return $this;
    }
}
