<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

final class EspnCompetition
{
    private ?string $id = null;
    private ?string $guid = null;
    private ?string $uid = null;
    private ?string $date = null;
    private ?int $attendance = null;
    private ?EspnCompetitionType $type = null;
    private ?bool $timeValid = null;
    private ?bool $dateValid = null;
    private ?bool $neutralSite = null;
    private ?bool $divisionCompetition = null;
    private ?bool $conferenceCompetition = null;
    private ?bool $previewAvailable = null;
    private ?bool $recapAvailable = null;
    private ?bool $boxscoreAvailable = null;
    private ?bool $lineupAvailable = null;
    private ?bool $gamecastAvailable = null;
    private ?bool $playByPlayAvailable = null;
    private ?bool $conversationAvailable = null;
    private ?bool $commentaryAvailable = null;
    private ?bool $pickcenterAvailable = null;
    private ?bool $summaryAvailable = null;
    private ?bool $liveAvailable = null;
    private ?bool $ticketsAvailable = null;
    private ?bool $highlightsAvailable = null;
    private ?bool $onWatchESPN = null;
    private ?bool $recent = null;
    private ?bool $bracketAvailable = null;
    private ?bool $wallclockAvailable = null;
    private ?bool $hasDefensiveStats = null;
    private ?EspnSource $gameSource = null;
    private ?EspnSource $boxscoreSource = null;
    private ?EspnSource $playByPlaySource = null;
    private ?EspnSource $linescoreSource = null;
    private ?EspnSource $statsSource = null;
    private ?EspnCompetitionFormat $format = null;
    private ?string $venueReference = null;
    private ?string $situationReference = null;
    private ?string $statusReference = null;
    private ?string $oddsReference = null;
    private ?string $broadcastsReference = null;
    private ?string $officialsReference = null;
    private ?string $leadersReference = null;
    private ?string $predicatorReference = null;
    private ?string $probabilitiesReference = null;
    private ?string $powerIndexesReference = null;
    private ?string $relevancyReference = null;
    private ?string $drivesReference = null;

    /**
     * @var EspnLink[]
     */
    private array $links = [];

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

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getAttendance(): ?int
    {
        return $this->attendance;
    }

    public function setAttendance(?int $attendance): static
    {
        $this->attendance = $attendance;
        return $this;
    }

    public function getType(): ?EspnCompetitionType
    {
        return $this->type;
    }

    public function setType(?EspnCompetitionType $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getTimeValid(): ?bool
    {
        return $this->timeValid;
    }

    public function setTimeValid(?bool $timeValid): static
    {
        $this->timeValid = $timeValid;
        return $this;
    }

    public function getDateValid(): ?bool
    {
        return $this->dateValid;
    }

    public function setDateValid(?bool $dateValid): static
    {
        $this->dateValid = $dateValid;
        return $this;
    }

    public function getNeutralSite(): ?bool
    {
        return $this->neutralSite;
    }

    public function setNeutralSite(?bool $neutralSite): static
    {
        $this->neutralSite = $neutralSite;
        return $this;
    }

    public function getDivisionCompetition(): ?bool
    {
        return $this->divisionCompetition;
    }

    public function setDivisionCompetition(?bool $divisionCompetition): static
    {
        $this->divisionCompetition = $divisionCompetition;
        return $this;
    }

    public function getConferenceCompetition(): ?bool
    {
        return $this->conferenceCompetition;
    }

    public function setConferenceCompetition(?bool $conferenceCompetition): static
    {
        $this->conferenceCompetition = $conferenceCompetition;
        return $this;
    }

    public function getPreviewAvailable(): ?bool
    {
        return $this->previewAvailable;
    }

    public function setPreviewAvailable(?bool $previewAvailable): static
    {
        $this->previewAvailable = $previewAvailable;
        return $this;
    }

    public function getRecapAvailable(): ?bool
    {
        return $this->recapAvailable;
    }

    public function setRecapAvailable(?bool $recapAvailable): static
    {
        $this->recapAvailable = $recapAvailable;
        return $this;
    }

    public function getBoxscoreAvailable(): ?bool
    {
        return $this->boxscoreAvailable;
    }

    public function setBoxscoreAvailable(?bool $boxscoreAvailable): static
    {
        $this->boxscoreAvailable = $boxscoreAvailable;
        return $this;
    }

    public function getLineupAvailable(): ?bool
    {
        return $this->lineupAvailable;
    }

    public function setLineupAvailable(?bool $lineupAvailable): static
    {
        $this->lineupAvailable = $lineupAvailable;
        return $this;
    }

    public function getGamecastAvailable(): ?bool
    {
        return $this->gamecastAvailable;
    }

    public function setGamecastAvailable(?bool $gamecastAvailable): static
    {
        $this->gamecastAvailable = $gamecastAvailable;
        return $this;
    }

    public function getPlayByPlayAvailable(): ?bool
    {
        return $this->playByPlayAvailable;
    }

    public function setPlayByPlayAvailable(?bool $playByPlayAvailable): static
    {
        $this->playByPlayAvailable = $playByPlayAvailable;
        return $this;
    }

    public function getConversationAvailable(): ?bool
    {
        return $this->conversationAvailable;
    }

    public function setConversationAvailable(?bool $conversationAvailable): static
    {
        $this->conversationAvailable = $conversationAvailable;
        return $this;
    }

    public function getCommentaryAvailable(): ?bool
    {
        return $this->commentaryAvailable;
    }

    public function setCommentaryAvailable(?bool $commentaryAvailable): static
    {
        $this->commentaryAvailable = $commentaryAvailable;
        return $this;
    }

    public function getPickcenterAvailable(): ?bool
    {
        return $this->pickcenterAvailable;
    }

    public function setPickcenterAvailable(?bool $pickcenterAvailable): static
    {
        $this->pickcenterAvailable = $pickcenterAvailable;
        return $this;
    }

    public function getSummaryAvailable(): ?bool
    {
        return $this->summaryAvailable;
    }

    public function setSummaryAvailable(?bool $summaryAvailable): static
    {
        $this->summaryAvailable = $summaryAvailable;
        return $this;
    }

    public function getLiveAvailable(): ?bool
    {
        return $this->liveAvailable;
    }

    public function setLiveAvailable(?bool $liveAvailable): static
    {
        $this->liveAvailable = $liveAvailable;
        return $this;
    }

    public function getTicketsAvailable(): ?bool
    {
        return $this->ticketsAvailable;
    }

    public function setTicketsAvailable(?bool $ticketsAvailable): static
    {
        $this->ticketsAvailable = $ticketsAvailable;
        return $this;
    }

    public function getHighlightsAvailable(): ?bool
    {
        return $this->highlightsAvailable;
    }

    public function setHighlightsAvailable(?bool $highlightsAvailable): static
    {
        $this->highlightsAvailable = $highlightsAvailable;
        return $this;
    }

    public function getOnWatchESPN(): ?bool
    {
        return $this->onWatchESPN;
    }

    public function setOnWatchESPN(?bool $onWatchESPN): static
    {
        $this->onWatchESPN = $onWatchESPN;
        return $this;
    }

    public function getRecent(): ?bool
    {
        return $this->recent;
    }

    public function setRecent(?bool $recent): static
    {
        $this->recent = $recent;
        return $this;
    }

    public function getBracketAvailable(): ?bool
    {
        return $this->bracketAvailable;
    }

    public function setBracketAvailable(?bool $bracketAvailable): static
    {
        $this->bracketAvailable = $bracketAvailable;
        return $this;
    }

    public function getWallclockAvailable(): ?bool
    {
        return $this->wallclockAvailable;
    }

    public function setWallclockAvailable(?bool $wallclockAvailable): static
    {
        $this->wallclockAvailable = $wallclockAvailable;
        return $this;
    }

    public function getHasDefensiveStats(): ?bool
    {
        return $this->hasDefensiveStats;
    }

    public function setHasDefensiveStats(?bool $hasDefensiveStats): static
    {
        $this->hasDefensiveStats = $hasDefensiveStats;
        return $this;
    }

    public function getGameSource(): ?EspnSource
    {
        return $this->gameSource;
    }

    public function setGameSource(?EspnSource $gameSource): static
    {
        $this->gameSource = $gameSource;
        return $this;
    }

    public function getBoxscoreSource(): ?EspnSource
    {
        return $this->boxscoreSource;
    }

    public function setBoxscoreSource(?EspnSource $boxscoreSource): static
    {
        $this->boxscoreSource = $boxscoreSource;
        return $this;
    }

    public function getPlayByPlaySource(): ?EspnSource
    {
        return $this->playByPlaySource;
    }

    public function setPlayByPlaySource(?EspnSource $playByPlaySource): static
    {
        $this->playByPlaySource = $playByPlaySource;
        return $this;
    }

    public function getLinescoreSource(): ?EspnSource
    {
        return $this->linescoreSource;
    }

    public function setLinescoreSource(?EspnSource $linescoreSource): static
    {
        $this->linescoreSource = $linescoreSource;
        return $this;
    }

    public function getStatsSource(): ?EspnSource
    {
        return $this->statsSource;
    }

    public function setStatsSource(?EspnSource $statsSource): static
    {
        $this->statsSource = $statsSource;
        return $this;
    }

    public function getFormat(): ?EspnCompetitionFormat
    {
        return $this->format;
    }

    public function setFormat(?EspnCompetitionFormat $format): static
    {
        $this->format = $format;
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

    public function getSituationReference(): ?string
    {
        return $this->situationReference;
    }

    public function setSituationReference(?string $situationReference): static
    {
        $this->situationReference = $situationReference;
        return $this;
    }

    public function getStatusReference(): ?string
    {
        return $this->statusReference;
    }

    public function setStatusReference(?string $statusReference): static
    {
        $this->statusReference = $statusReference;
        return $this;
    }

    public function getOddsReference(): ?string
    {
        return $this->oddsReference;
    }

    public function setOddsReference(?string $oddsReference): static
    {
        $this->oddsReference = $oddsReference;
        return $this;
    }

    public function getBroadcastsReference(): ?string
    {
        return $this->broadcastsReference;
    }

    public function setBroadcastsReference(?string $broadcastsReference): static
    {
        $this->broadcastsReference = $broadcastsReference;
        return $this;
    }

    public function getOfficialsReference(): ?string
    {
        return $this->officialsReference;
    }

    public function setOfficialsReference(?string $officialsReference): static
    {
        $this->officialsReference = $officialsReference;
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

    public function getPredicatorReference(): ?string
    {
        return $this->predicatorReference;
    }

    public function setPredicatorReference(?string $predicatorReference): static
    {
        $this->predicatorReference = $predicatorReference;
        return $this;
    }

    public function getProbabilitiesReference(): ?string
    {
        return $this->probabilitiesReference;
    }

    public function setProbabilitiesReference(?string $probabilitiesReference): static
    {
        $this->probabilitiesReference = $probabilitiesReference;
        return $this;
    }

    public function getPowerIndexesReference(): ?string
    {
        return $this->powerIndexesReference;
    }

    public function setPowerIndexesReference(?string $powerIndexesReference): static
    {
        $this->powerIndexesReference = $powerIndexesReference;
        return $this;
    }

    public function getRelevancyReference(): ?string
    {
        return $this->relevancyReference;
    }

    public function setRelevancyReference(?string $relevancyReference): static
    {
        $this->relevancyReference = $relevancyReference;
        return $this;
    }

    public function getDrivesReference(): ?string
    {
        return $this->drivesReference;
    }

    public function setDrivesReference(?string $drivesReference): static
    {
        $this->drivesReference = $drivesReference;
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
}
