<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnWeek
{
    private ?int $number = null;
    private ?string $startDate = null;
    private ?string $endDate = null;
    private ?string $text = null;
    private ?string $rankingsReference = null;
    private ?string $eventsReference = null;
    private ?string $talentpicksReference = null;
    private ?string $qbrReference = null;

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): static
    {
        $this->number = $number;
        return $this;
    }

    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    public function setStartDate(?string $startDate): static
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    public function setEndDate(?string $endDate): static
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function getRankingsReference(): ?string
    {
        return $this->rankingsReference;
    }

    public function setRankingsReference(?string $rankingsReference): static
    {
        $this->rankingsReference = $rankingsReference;
        return $this;
    }

    public function getEventsReference(): ?string
    {
        return $this->eventsReference;
    }

    public function setEventsReference(?string $eventsReference): static
    {
        $this->eventsReference = $eventsReference;
        return $this;
    }

    public function getTalentpicksReference(): ?string
    {
        return $this->talentpicksReference;
    }

    public function setTalentpicksReference(?string $talentpicksReference): static
    {
        $this->talentpicksReference = $talentpicksReference;
        return $this;
    }

    public function getQbrReference(): ?string
    {
        return $this->qbrReference;
    }

    public function setQbrReference(?string $qbrReference): static
    {
        $this->qbrReference = $qbrReference;
        return $this;
    }
}
