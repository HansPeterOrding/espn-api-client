<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnSeasonTeam
{
    private ?string $id = null;
    private ?string $guid = null;
    private ?string $uid = null;
    private ?array $alternateIds = null;
    private ?string $slug = null;
    private ?string $location = null;
    private ?string $name = null;
    private ?string $nickname = null;
    private ?string $abbreviation = null;
    private ?string $displayName = null;
    private ?string $shortDisplayName = null;
    private ?string $color = null;
    private ?string $alternateColor = null;
    private ?bool $isActive = null;
    private ?bool $isAllStar = null;

    /**
     * @var EspnImage[]
     */
    private array $logos;

    private ?string $recordReference = null;
    private ?string $oddsRecordsReference = null;
    private ?string $athletesReference = null;
    private ?string $venueReference = null;
    private ?string $groupsReference = null;
    private ?string $ranksReference = null;
    private ?string $statisticsReference = null;
    private ?string $leadersReference = null;

    /**
     * @var EspnLink[]
     */
    private array $links;

    private ?string $injuriesReference = null;
    private ?string $notesReference = null;
    private ?string $againstTheSpreadRecordsReference = null;
    private ?string $awardsReference = null;
    private ?string $franchiseReference = null;
    private ?string $depthChartsReference = null;
    private ?string $projectionReference = null;
    private ?string $eventsReference = null;
    private ?string $transactionsReference = null;
    private ?string $coachesReference = null;
    private ?string $attendanceReference = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): static
    {
        $this->guid = $guid;
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

    public function getAlternateIds(): ?array
    {
        return $this->alternateIds;
    }

    public function setAlternateIds(?array $alternateIds): static
    {
        $this->alternateIds = $alternateIds;
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): static
    {
        $this->slug = $slug;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(?string $nickname): static
    {
        $this->nickname = $nickname;
        return $this;
    }

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): static
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): static
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getShortDisplayName(): ?string
    {
        return $this->shortDisplayName;
    }

    public function setShortDisplayName(?string $shortDisplayName): static
    {
        $this->shortDisplayName = $shortDisplayName;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;
        return $this;
    }

    public function getAlternateColor(): ?string
    {
        return $this->alternateColor;
    }

    public function setAlternateColor(?string $alternateColor): static
    {
        $this->alternateColor = $alternateColor;
        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getIsAllStar(): ?bool
    {
        return $this->isAllStar;
    }

    public function setIsAllStar(?bool $isAllStar): static
    {
        $this->isAllStar = $isAllStar;
        return $this;
    }

    public function getLogos(): array
    {
        return $this->logos;
    }

    public function setLogos(array $logos): static
    {
        $this->logos = $logos;
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

    public function getOddsRecordsReference(): ?string
    {
        return $this->oddsRecordsReference;
    }

    public function setOddsRecordsReference(?string $oddsRecordsReference): static
    {
        $this->oddsRecordsReference = $oddsRecordsReference;
        return $this;
    }

    public function getAthletesReference(): ?string
    {
        return $this->athletesReference;
    }

    public function setAthletesReference(?string $athletesReference): static
    {
        $this->athletesReference = $athletesReference;
        return $this;
    }

    public function getVenueReference(): ?string
    {
        return $this->venueReference;
    }

    public function setVenueReference(?string $venueReference): static
    {
        $this->venueReference = $venueReference;
        return $this;
    }

    public function getGroupsReference(): ?string
    {
        return $this->groupsReference;
    }

    public function setGroupsReference(?string $groupsReference): static
    {
        $this->groupsReference = $groupsReference;
        return $this;
    }

    public function getRanksReference(): ?string
    {
        return $this->ranksReference;
    }

    public function setRanksReference(?string $ranksReference): static
    {
        $this->ranksReference = $ranksReference;
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

    public function getLinks(): array
    {
        return $this->links;
    }

    public function setLinks(array $links): static
    {
        $this->links = $links;
        return $this;
    }

    public function getInjuriesReference(): ?string
    {
        return $this->injuriesReference;
    }

    public function setInjuriesReference(?string $injuriesReference): static
    {
        $this->injuriesReference = $injuriesReference;
        return $this;
    }

    public function getNotesReference(): ?string
    {
        return $this->notesReference;
    }

    public function setNotesReference(?string $notesReference): static
    {
        $this->notesReference = $notesReference;
        return $this;
    }

    public function getAgainstTheSpreadRecordsReference(): ?string
    {
        return $this->againstTheSpreadRecordsReference;
    }

    public function setAgainstTheSpreadRecordsReference(?string $againstTheSpreadRecordsReference): static
    {
        $this->againstTheSpreadRecordsReference = $againstTheSpreadRecordsReference;
        return $this;
    }

    public function getAwardsReference(): ?string
    {
        return $this->awardsReference;
    }

    public function setAwardsReference(?string $awardsReference): static
    {
        $this->awardsReference = $awardsReference;
        return $this;
    }

    public function getFranchiseReference(): ?string
    {
        return $this->franchiseReference;
    }

    public function setFranchiseReference(?string $franchiseReference): static
    {
        $this->franchiseReference = $franchiseReference;
        return $this;
    }

    public function getDepthChartsReference(): ?string
    {
        return $this->depthChartsReference;
    }

    public function setDepthChartsReference(?string $depthChartsReference): static
    {
        $this->depthChartsReference = $depthChartsReference;
        return $this;
    }

    public function getProjectionReference(): ?string
    {
        return $this->projectionReference;
    }

    public function setProjectionReference(?string $projectionReference): static
    {
        $this->projectionReference = $projectionReference;
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

    public function getTransactionsReference(): ?string
    {
        return $this->transactionsReference;
    }

    public function setTransactionsReference(?string $transactionsReference): static
    {
        $this->transactionsReference = $transactionsReference;
        return $this;
    }

    public function getCoachesReference(): ?string
    {
        return $this->coachesReference;
    }

    public function setCoachesReference(?string $coachesReference): static
    {
        $this->coachesReference = $coachesReference;
        return $this;
    }

    public function getAttendanceReference(): ?string
    {
        return $this->attendanceReference;
    }

    public function setAttendanceReference(?string $attendanceReference): static
    {
        $this->attendanceReference = $attendanceReference;
        return $this;
    }
}
