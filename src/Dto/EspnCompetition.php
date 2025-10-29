<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnCompetition
{
    private string $id;
    private \DateTime $date;
    private int $attendance;
    private EspnCompetitionType $type;
    private bool $timeValid;
    private bool $neutralSite;
    private bool $boxscoreAvailable;
    private bool $ticketsAvailable;
    private EspnVenue $venue;

    /**
     * @var EspnCompetitor[]
     */
    private array $competitors;

    /**
     * @var EspnNote[]
     */
    private array $notes;

    /**
     * @var EspnBroadcast[]
     */
    private array $broadcasts;
    private EspnCompetitionStatus $status;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): EspnCompetition
    {
        $this->id = $id;
        return $this;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): EspnCompetition
    {
        $this->date = $date;
        return $this;
    }

    public function getAttendance(): int
    {
        return $this->attendance;
    }

    public function setAttendance(int $attendance): EspnCompetition
    {
        $this->attendance = $attendance;
        return $this;
    }

    public function getType(): EspnCompetitionType
    {
        return $this->type;
    }

    public function setType(EspnCompetitionType $type): EspnCompetition
    {
        $this->type = $type;
        return $this;
    }

    public function isTimeValid(): bool
    {
        return $this->timeValid;
    }

    public function setTimeValid(bool $timeValid): EspnCompetition
    {
        $this->timeValid = $timeValid;
        return $this;
    }

    public function isNeutralSite(): bool
    {
        return $this->neutralSite;
    }

    public function setNeutralSite(bool $neutralSite): EspnCompetition
    {
        $this->neutralSite = $neutralSite;
        return $this;
    }

    public function isBoxscoreAvailable(): bool
    {
        return $this->boxscoreAvailable;
    }

    public function setBoxscoreAvailable(bool $boxscoreAvailable): EspnCompetition
    {
        $this->boxscoreAvailable = $boxscoreAvailable;
        return $this;
    }

    public function isTicketsAvailable(): bool
    {
        return $this->ticketsAvailable;
    }

    public function setTicketsAvailable(bool $ticketsAvailable): EspnCompetition
    {
        $this->ticketsAvailable = $ticketsAvailable;
        return $this;
    }

    public function getVenue(): EspnVenue
    {
        return $this->venue;
    }

    public function setVenue(EspnVenue $venue): EspnCompetition
    {
        $this->venue = $venue;
        return $this;
    }

    public function getCompetitors(): array
    {
        return $this->competitors;
    }

    public function setCompetitors(array $competitors): EspnCompetition
    {
        $this->competitors = $competitors;
        return $this;
    }

    public function getNotes(): array
    {
        return $this->notes;
    }

    public function setNotes(array $notes): EspnCompetition
    {
        $this->notes = $notes;
        return $this;
    }

    public function getBroadcasts(): array
    {
        return $this->broadcasts;
    }

    public function setBroadcasts(array $broadcasts): EspnCompetition
    {
        $this->broadcasts = $broadcasts;
        return $this;
    }

    public function getStatus(): EspnCompetitionStatus
    {
        return $this->status;
    }

    public function setStatus(EspnCompetitionStatus $status): EspnCompetition
    {
        $this->status = $status;
        return $this;
    }
}
