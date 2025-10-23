<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use HansPeterOrding\EspnApiClient\Dto\EspnTeam;

final class EspnCompetitor
{
    private string $id;
    private string $type;
    private int $order;
    private string $homeAray;
    private bool $winner;
    private EspnTeam $team;
    private EspnCompetitorScore $score;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnCompetitor
    {
        $this->id = $id;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): EspnCompetitor
    {
        $this->type = $type;
        return $this;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): EspnCompetitor
    {
        $this->order = $order;
        return $this;
    }

    public function getHomeAray(): string
    {
        return $this->homeAray;
    }

    public function setHomeAray(string $homeAray): EspnCompetitor
    {
        $this->homeAray = $homeAray;
        return $this;
    }

    public function isWinner(): bool
    {
        return $this->winner;
    }

    public function setWinner(bool $winner): EspnCompetitor
    {
        $this->winner = $winner;
        return $this;
    }

    public function getTeam(): EspnTeam
    {
        return $this->team;
    }

    public function setTeam(EspnTeam $team): EspnCompetitor
    {
        $this->team = $team;
        return $this;
    }

    public function getScore(): EspnCompetitorScore
    {
        return $this->score;
    }

    public function setScore(EspnCompetitorScore $score): EspnCompetitor
    {
        $this->score = $score;
        return $this;
    }
}
