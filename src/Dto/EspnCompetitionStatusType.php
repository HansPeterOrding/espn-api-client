<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnCompetitionStatusType
{
    private string $id;
    private string $name;
    private string $state;
    private bool $completed;
    private string $description;
    private string $detail;
    private string $shortDetail;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnCompetitionStatusType
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): EspnCompetitionStatusType
    {
        $this->name = $name;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): EspnCompetitionStatusType
    {
        $this->state = $state;
        return $this;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }

    public function setCompleted(bool $completed): EspnCompetitionStatusType
    {
        $this->completed = $completed;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): EspnCompetitionStatusType
    {
        $this->description = $description;
        return $this;
    }

    public function getDetail(): string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): EspnCompetitionStatusType
    {
        $this->detail = $detail;
        return $this;
    }

    public function getShortDetail(): string
    {
        return $this->shortDetail;
    }

    public function setShortDetail(string $shortDetail): EspnCompetitionStatusType
    {
        $this->shortDetail = $shortDetail;
        return $this;
    }
}
