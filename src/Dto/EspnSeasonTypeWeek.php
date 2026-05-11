<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use DateTime;

final class EspnSeasonTypeWeek
{
    private ?int $number = null;
    private ?DateTime $startDate = null;
    private ?DateTime $endDate = null;
    private ?string $text = null;

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): static
    {
        $this->number = $number;
        return $this;
    }

    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(?DateTime $startDate): static
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?DateTime $endDate): static
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
}
