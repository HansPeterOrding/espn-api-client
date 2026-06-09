<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnDraft
{
    private ?string $displayText = null;
    private ?int $round = null;
    private ?int $year = null;
    private ?int $selection = null;
    private ?string $teamReference = null;

    public function getDisplayText(): ?string
    {
        return $this->displayText;
    }

    public function setDisplayText(?string $displayText): static
    {
        $this->displayText = $displayText;
        return $this;
    }

    public function getRound(): ?int
    {
        return $this->round;
    }

    public function setRound(?int $round): static
    {
        $this->round = $round;
        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): static
    {
        $this->year = $year;
        return $this;
    }

    public function getSelection(): ?int
    {
        return $this->selection;
    }

    public function setSelection(?int $selection): static
    {
        $this->selection = $selection;
        return $this;
    }

    public function getTeamReference(): ?string
    {
        return $this->teamReference;
    }

    public function setTeamReference(?string $teamReference): static
    {
        $this->teamReference = $teamReference;
        return $this;
    }
}
