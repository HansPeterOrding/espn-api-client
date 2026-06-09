<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnInjury
{
    private ?string $id = null;
    private ?string $longComment = null;
    private ?string $shortComment = null;
    private ?string $status = null;
    private ?string $date = null;
    private ?EspnSource $source = null;
    private ?EspnInjuryType $type = null;
    private ?string $athleteReference = null;
    private ?string $teamReference = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getLongComment(): ?string
    {
        return $this->longComment;
    }

    public function setLongComment(?string $longComment): static
    {
        $this->longComment = $longComment;
        return $this;
    }

    public function getShortComment(): ?string
    {
        return $this->shortComment;
    }

    public function setShortComment(?string $shortComment): static
    {
        $this->shortComment = $shortComment;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getSource(): ?EspnSource
    {
        return $this->source;
    }

    public function setSource(?EspnSource $source): static
    {
        $this->source = $source;
        return $this;
    }

    public function getType(): ?EspnInjuryType
    {
        return $this->type;
    }

    public function setType(?EspnInjuryType $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getAthleteReference(): ?string
    {
        return $this->athleteReference;
    }

    public function setAthleteReference(?string $athleteReference): static
    {
        $this->athleteReference = $athleteReference;
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
