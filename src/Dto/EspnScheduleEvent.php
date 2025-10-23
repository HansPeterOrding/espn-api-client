<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use DateTime;

class EspnScheduleEvent
{
    private string $id;
    private DateTime $date;
    private string $name;
    private string $shortName;
    private EspnSeason $season;
    private EspnSeasonType $seasonType;
    private EspnWeek $week;
    private bool $timeValid;

    /**
     * @var EspnCompetition[]
     */
    private array $competitions;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnScheduleEvent
    {
        $this->id = $id;
        return $this;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): EspnScheduleEvent
    {
        $this->date = $date;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): EspnScheduleEvent
    {
        $this->name = $name;
        return $this;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): EspnScheduleEvent
    {
        $this->shortName = $shortName;
        return $this;
    }

    public function getSeason(): EspnSeason
    {
        return $this->season;
    }

    public function setSeason(EspnSeason $season): EspnScheduleEvent
    {
        $this->season = $season;
        return $this;
    }

    public function getSeasonType(): EspnSeasonType
    {
        return $this->seasonType;
    }

    public function setSeasonType(EspnSeasonType $seasonType): EspnScheduleEvent
    {
        $this->seasonType = $seasonType;
        return $this;
    }

    public function getWeek(): EspnWeek
    {
        return $this->week;
    }

    public function setWeek(EspnWeek $week): EspnScheduleEvent
    {
        $this->week = $week;
        return $this;
    }

    public function isTimeValid(): bool
    {
        return $this->timeValid;
    }

    public function setTimeValid(bool $timeValid): EspnScheduleEvent
    {
        $this->timeValid = $timeValid;
        return $this;
    }

    public function getCompetitions(): array
    {
        return $this->competitions;
    }

    public function setCompetitions(array $competitions): EspnScheduleEvent
    {
        $this->competitions = $competitions;
        return $this;
    }
}
