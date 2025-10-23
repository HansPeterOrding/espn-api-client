<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use DateTime;

final class EspnSchedule
{
    private DateTime $timestamp;
    private string $status;
    private EspnSeason $season;

    private EspnTeam $team;

    /**
     * @var EspnScheduleEvent[]
     */
    private array $events;
    private int $byeWeek;

    public function getTimestamp(): DateTime
    {
        return $this->timestamp;
    }

    public function setTimestamp(DateTime $timestamp): EspnSchedule
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): EspnSchedule
    {
        $this->status = $status;
        return $this;
    }

    public function getSeason(): EspnSeason
    {
        return $this->season;
    }

    public function setSeason(EspnSeason $season): EspnSchedule
    {
        $this->season = $season;
        return $this;
    }

    public function getTeam(): EspnTeam
    {
        return $this->team;
    }

    public function setTeam(EspnTeam $team): EspnSchedule
    {
        $this->team = $team;
        return $this;
    }

    public function getEvents()
    {
        return $this->events;
    }

    public function setEvents($events)
    {
        $this->events = $events;
        return $this;
    }

    public function getByeWeek(): int
    {
        return $this->byeWeek;
    }

    public function setByeWeek(int $byeWeek): EspnSchedule
    {
        $this->byeWeek = $byeWeek;
        return $this;
    }
}
