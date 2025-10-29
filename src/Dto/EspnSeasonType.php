<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnSeasonType
{
    private string $id;
    private int $type;
    private string $name;
    private string $abbreviation;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnSeasonType
    {
        $this->id = $id;
        return $this;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): EspnSeasonType
    {
        $this->type = $type;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): EspnSeasonType
    {
        $this->name = $name;
        return $this;
    }

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(string $abbreviation): EspnSeasonType
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }
}
