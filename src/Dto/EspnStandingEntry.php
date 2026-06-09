<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnStandingEntry
{
    private ?string $teamReference = null;

    /**
     * @var string[]
     */
    private array $recordReferences = [];

    public function getTeamReference(): ?string
    {
        return $this->teamReference;
    }

    public function setTeamReference(?string $teamReference): static
    {
        $this->teamReference = $teamReference;
        return $this;
    }

    public function getRecordReferences(): array
    {
        return $this->recordReferences;
    }

    public function setRecordReferences(array $recordReferences): static
    {
        $this->recordReferences = $recordReferences;
        return $this;
    }
}
