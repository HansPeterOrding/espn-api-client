<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnCompetitionType
{
    private string $id;
    private string $text;
    private string $abbreviation;
    private string $slug;
    private string $type;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnCompetitionType
    {
        $this->id = $id;
        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): EspnCompetitionType
    {
        $this->text = $text;
        return $this;
    }

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(string $abbreviation): EspnCompetitionType
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): EspnCompetitionType
    {
        $this->slug = $slug;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): EspnCompetitionType
    {
        $this->type = $type;
        return $this;
    }
}
