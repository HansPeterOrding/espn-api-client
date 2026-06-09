<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\Dto;

use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

final class EspnAthlete
{
    private ?string $id = null;
    private ?string $uid = null;
    private ?string $guid = null;
    private ?string $type = null;
    private ?array $alternateIds = null;
    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?string $fullName = null;
    private ?string $displayName = null;
    private ?string $shortName = null;
    #[Context(denormalizationContext: [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true])]
    private ?string $weight = null;
    private ?string $displayWeight = null;
    #[Context(denormalizationContext: [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true])]
    private ?string $height = null;
    private ?string $displayHeight = null;
    private ?int $age = null;
    private ?string $dateOfBirth = null;
    private ?int $debutYear = null;
    private ?string $slug = null;
    private ?string $jersey = null;
    private ?EspnAddress $birthPlace = null;
    private ?EspnImage $headshot = null;
    private ?EspnDraft $draft = null;
    private ?bool $linked = null;
    private ?bool $active = null;
    private ?EspnExperience $experience = null;
    private ?EspnAthleteStatus $status = null;
    private ?string $positionReference = null;

    /**
     * @var EspnLink[]
     */
    private array $links = [];

    private ?string $collegeReference = null;
    private ?string $collegeAthleteReference = null;
    private ?string $teamReference = null;
    private ?string $notesReference = null;
    private ?string $contractsReference = null;
    private ?string $contractReference = null;
    private ?string $statisticsReference = null;
    private ?string $projectionsReference = null;
    private ?string $eventLogReference = null;
    private array $injuriesReferences = [];

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

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): static
    {
        $this->guid = $guid;
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

    public function getAlternateIds(): ?array
    {
        return $this->alternateIds;
    }

    public function setAlternateIds(?array $alternateIds): static
    {
        $this->alternateIds = $alternateIds;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): static
    {
        $this->fullName = $fullName;
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

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(?string $shortName): static
    {
        $this->shortName = $shortName;
        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): static
    {
        $this->weight = $weight;
        return $this;
    }

    public function getDisplayWeight(): ?string
    {
        return $this->displayWeight;
    }

    public function setDisplayWeight(?string $displayWeight): static
    {
        $this->displayWeight = $displayWeight;
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): static
    {
        $this->height = $height;
        return $this;
    }

    public function getDisplayHeight(): ?string
    {
        return $this->displayHeight;
    }

    public function setDisplayHeight(?string $displayHeight): static
    {
        $this->displayHeight = $displayHeight;
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

    public function getJersey(): ?string
    {
        return $this->jersey;
    }

    public function setJersey(?string $jersey): static
    {
        $this->jersey = $jersey;
        return $this;
    }

    public function getBirthPlace(): ?EspnAddress
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(?EspnAddress $birthPlace): static
    {
        $this->birthPlace = $birthPlace;
        return $this;
    }

    public function getLinked(): ?bool
    {
        return $this->linked;
    }

    public function setLinked(?bool $linked): static
    {
        $this->linked = $linked;
        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): static
    {
        $this->active = $active;
        return $this;
    }

    public function getExperience(): ?EspnExperience
    {
        return $this->experience;
    }

    public function setExperience(?EspnExperience $experience): static
    {
        $this->experience = $experience;
        return $this;
    }

    public function getStatus(): ?EspnAthleteStatus
    {
        return $this->status;
    }

    public function setStatus(?EspnAthleteStatus $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getPositionReference(): ?string
    {
        return $this->positionReference;
    }

    public function setPositionReference(?string $positionReference): static
    {
        $this->positionReference = $positionReference;
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

    public function getCollegeReference(): ?string
    {
        return $this->collegeReference;
    }

    public function setCollegeReference(?string $collegeReference): static
    {
        $this->collegeReference = $collegeReference;
        return $this;
    }

    public function getCollegeAthleteReference(): ?string
    {
        return $this->collegeAthleteReference;
    }

    public function setCollegeAthleteReference(?string $collegeAthleteReference): static
    {
        $this->collegeAthleteReference = $collegeAthleteReference;
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

    public function getNotesReference(): ?string
    {
        return $this->notesReference;
    }

    public function setNotesReference(?string $notesReference): static
    {
        $this->notesReference = $notesReference;
        return $this;
    }

    public function getContractsReference(): ?string
    {
        return $this->contractsReference;
    }

    public function setContractsReference(?string $contractsReference): static
    {
        $this->contractsReference = $contractsReference;
        return $this;
    }

    public function getEventLogReference(): ?string
    {
        return $this->eventLogReference;
    }

    public function setEventLogReference(?string $eventLogReference): static
    {
        $this->eventLogReference = $eventLogReference;
        return $this;
    }

    public function getInjuriesReferences(): array
    {
        return $this->injuriesReferences;
    }

    public function setInjuriesReferences(array $injuriesReferences): static
    {
        $this->injuriesReferences = $injuriesReferences;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;
        return $this;
    }

    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(?string $dateOfBirth): static
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    public function getDebutYear(): ?int
    {
        return $this->debutYear;
    }

    public function setDebutYear(?int $debutYear): static
    {
        $this->debutYear = $debutYear;
        return $this;
    }

    public function getHeadshot(): ?EspnImage
    {
        return $this->headshot;
    }

    public function setHeadshot(?EspnImage $headshot): static
    {
        $this->headshot = $headshot;
        return $this;
    }

    public function getDraft(): ?EspnDraft
    {
        return $this->draft;
    }

    public function setDraft(?EspnDraft $draft): static
    {
        $this->draft = $draft;
        return $this;
    }

    public function getContractReference(): ?string
    {
        return $this->contractReference;
    }

    public function setContractReference(?string $contractReference): static
    {
        $this->contractReference = $contractReference;
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

    public function getProjectionsReference(): ?string
    {
        return $this->projectionsReference;
    }

    public function setProjectionsReference(?string $projectionsReference): static
    {
        $this->projectionsReference = $projectionsReference;
        return $this;
    }
}
