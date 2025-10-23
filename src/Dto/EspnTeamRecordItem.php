<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnTeamRecordItem
{
    private string $description;

    private string $type;

    private string $summary;

    /**
     * @var EspnTeamRecordStat[]
     */
    private array $stats = [];

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): EspnTeamRecordItem
    {
        $this->description = $description;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): EspnTeamRecordItem
    {
        $this->type = $type;
        return $this;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): EspnTeamRecordItem
    {
        $this->summary = $summary;
        return $this;
    }

    public function getStats(): array
    {
        return $this->stats;
    }

    public function setStats(array $stats): EspnTeamRecordItem
    {
        $this->stats = $stats;
        return $this;
    }
}
