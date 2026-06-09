<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnCompetitor
{
    private ?string $id = null;
    private ?string $uid = null;
    private ?string $type = null;
    private ?int $order = null;
    private ?string $homeAway = null;
    private ?bool $winner = null;
    private ?string $teamReference = null;
    private ?string $scoreReference = null;
    private ?string $linescoresReference = null;
    private ?string $rosterReference = null;
    private ?string $statisticsReference = null;
    private ?string $leadersReference = null;
    private ?string $recordReference = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(?string $uid): static
    {
        $this->uid = $uid;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): static
    {
        $this->order = $order;
        return $this;
    }

    public function getHomeAway(): ?string
    {
        return $this->homeAway;
    }

    public function setHomeAway(?string $homeAway): static
    {
        $this->homeAway = $homeAway;
        return $this;
    }

    public function getWinner(): ?bool
    {
        return $this->winner;
    }

    public function setWinner(?bool $winner): static
    {
        $this->winner = $winner;
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

    public function getScoreReference(): ?string
    {
        return $this->scoreReference;
    }

    public function setScoreReference(?string $scoreReference): static
    {
        $this->scoreReference = $scoreReference;
        return $this;
    }

    public function getLinescoresReference(): ?string
    {
        return $this->linescoresReference;
    }

    public function setLinescoresReference(?string $linescoresReference): static
    {
        $this->linescoresReference = $linescoresReference;
        return $this;
    }

    public function getRosterReference(): ?string
    {
        return $this->rosterReference;
    }

    public function setRosterReference(?string $rosterReference): static
    {
        $this->rosterReference = $rosterReference;
        return $this;
    }

    public function getStatisticsReference(): ?string
    {
        return $this->statisticsReference;
    }

    public function setStatisticsReference(?string $statisticsReference): static
    {
        $this->statisticsReference = $statisticsReference;
        return $this;
    }

    public function getLeadersReference(): ?string
    {
        return $this->leadersReference;
    }

    public function setLeadersReference(?string $leadersReference): static
    {
        $this->leadersReference = $leadersReference;
        return $this;
    }

    public function getRecordReference(): ?string
    {
        return $this->recordReference;
    }

    public function setRecordReference(?string $recordReference): static
    {
        $this->recordReference = $recordReference;
        return $this;
    }
}
