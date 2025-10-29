<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnSeason
{
    private int $year;
    private ?int $type = null;
    private ?string $name = null;
    private string $displayName;
    private ?int $half = null;

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): EspnSeason
    {
        $this->year = $year;
        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): EspnSeason
    {
        $this->type = $type;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): EspnSeason
    {
        $this->name = $name;
        return $this;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): EspnSeason
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getHalf(): ?int
    {
        return $this->half;
    }

    public function setHalf(?int $half): EspnSeason
    {
        $this->half = $half;
        return $this;
    }
}
