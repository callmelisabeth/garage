<?php

namespace App\Entity;

use App\Repository\OpeningHoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpeningHoursRepository::class)]
class OpeningHours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingMondayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingMondayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingMondayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingMondayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingTuesdayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingTuesdayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingTuesdayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingTuesdayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingWednesdayMorning = null;
    
    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingWednesdayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingWednesdayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingWednesdayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingThursdayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingThursdayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingThursdayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingThursdayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingFridayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingFridayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingFridayAfternon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingFridayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingSaturdayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingSaturdayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingSaturdayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingSaturdayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingSundayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingSundayMorning = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openingSundayAfternoon = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closingSundayAfternoon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOpeningMondayMorning(): ?\DateTimeInterface
    {
        return $this->openingMondayMorning;
    }

    public function setOpeningMondayMorning(\DateTimeInterface $openingMondayMorning): static
    {
        $this->openingMondayMorning = $openingMondayMorning;

        return $this;
    }

    public function getClosingMondayMorning(): ?\DateTimeInterface
    {
        return $this->closingMondayMorning;
    }

    public function setClosingMondayMorning(\DateTimeInterface $closingMondayMorning): static
    {
        $this->closingMondayMorning = $closingMondayMorning;

        return $this;
    }

    public function getOpeningMondayAfternoon(): ?\DateTimeInterface
    {
        return $this->openingMondayAfternoon;
    }

    public function setOpeningMondayAfternoon(\DateTimeInterface $openingMondayAfternoon): static
    {
        $this->openingMondayAfternoon = $openingMondayAfternoon;

        return $this;
    }

    public function getClosingMondayAfternoon(): ?\DateTimeInterface
    {
        return $this->closingMondayAfternoon;
    }

    public function setClosingMondayAfternoon(\DateTimeInterface $closingMondayAfternoon): static
    {
        $this->closingMondayAfternoon = $closingMondayAfternoon;

        return $this;
    }

    public function getOpeningTuesdayMorning(): ?\DateTimeInterface
    {
        return $this->openingTuesdayMorning;
    }

    public function setOpeningTuesdayMorning(\DateTimeInterface $openingTuesdayMorning): static
    {
        $this->openingTuesdayMorning = $openingTuesdayMorning;

        return $this;
    }

    public function getClosingTuesdayMorning(): ?\DateTimeInterface
    {
        return $this->closingTuesdayMorning;
    }

    public function setClosingTuesdayMorning(\DateTimeInterface $closingMondayMorning): static
    {
        $this->closingTuesdayMorning = $closingMondayMorning;

        return $this;
    }

    public function getOpeningTuesdayAfternoon(): ?\DateTimeInterface
    {
        return $this->openingTuesdayAfternoon;
    }

    public function setOpeningTuesdayAfternoon(\DateTimeInterface $openingTuesdayAfeternoon): static
    {
        $this->openingTuesdayAfternoon = $openingTuesdayAfeternoon;

        return $this;
    }

    public function getClosingTuesdayAfternoon(): ?\DateTimeInterface
    {
        return $this->closingTuesdayAfternoon;
    }

    public function setClosingTuesdayAfternoon(\DateTimeInterface $closingTuesdayAfternoon): static
    {
        $this->closingTuesdayAfternoon = $closingTuesdayAfternoon;

        return $this;
    }

    public function getOpeningWednesdayMorning(): ?\DateTimeInterface
    {
        return $this->openingWednesdayMorning;
    }

    public function setOpeningWednesdayMorning(\DateTimeInterface $openinWednesdayMorning): static
    {
        $this->openingWednesdayMorning = $openinWednesdayMorning;

        return $this;
    }

    public function getClosingWednesdayMorning(): ?\DateTimeInterface
    {
        return $this->closingWednesdayMorning;
    }

    public function setClosingWednesdayMorning(\DateTimeInterface $closingWednesdayMorning): static
    {
        $this->closingWednesdayMorning = $closingWednesdayMorning;

        return $this;
    }

    public function getOpeningWednesdayAfternon(): ?\DateTimeInterface
    {
        return $this->openingWednesdayAfternoon;
    }

    public function setOpeningWednesdayAfternon(\DateTimeInterface $openingWednesdayAfternoon): static
    {
        $this->openingWednesdayAfternoon = $openingWednesdayAfternoon;

        return $this;
    }

    public function getClosingWednesdayAfternon(): ?\DateTimeInterface
    {
        return $this->closingWednesdayAfternoon;
    }

    public function setClosingWednesdayAfternon(\DateTimeInterface $closingWednesdayAfternon): static
    {
        $this->closingWednesdayAfternoon = $closingWednesdayAfternon;

        return $this;
    }
    public function getOpeningThursdayMorning(): ?\DateTimeInterface
    {
        return $this->openingThursdayMorning;
    }

    public function setOpeningThursdayMorning(\DateTimeInterface $openingThursdayMorning): static
    {
        $this->openingThursdayMorning = $openingThursdayMorning;

        return $this;
    }

    public function getClosingThursdayMorning(): ?\DateTimeInterface
    {
        return $this->closingThursdayMorning;
    }

    public function setClosingThursdayMorning(\DateTimeInterface $closingThursdayMorning): static
    {
        $this->closingThursdayMorning = $closingThursdayMorning;

        return $this;
    }

    public function getClosingThursdayAfternoon(): ?\DateTimeInterface
    {
        return $this->closingThursdayAfternoon;
    }

    public function setClosingThursdayAfternoon(\DateTimeInterface $closingThursdayAfternoon): static
    {
        $this->closingThursdayAfternoon = $closingThursdayAfternoon;

        return $this;
    }

    public function getOpeningThursdayAfternoon(): ?\DateTimeInterface
    {
        return $this->openingThursdayAfternoon;
    }

    public function setOpeningThursdayAfternoon(\DateTimeInterface $openingThursdayAfternoon): static
    {
        $this->openingThursdayAfternoon = $openingThursdayAfternoon;

        return $this;
    }

    public function getOpeningFridayMorning(): ?\DateTimeInterface
    {
        return $this->openingFridayMorning;
    }

    public function setOpeningFridayMorning(\DateTimeInterface $openingFridayMorning): static
    {
        $this->openingFridayMorning = $openingFridayMorning;

        return $this;
    }

    public function getClosingFridayMorning(): ?\DateTimeInterface
    {
        return $this->closingFridayMorning;
    }

    public function setClosingFridayMorning(\DateTimeInterface $closingFridayMorning): static
    {
        $this->closingFridayMorning = $closingFridayMorning;

        return $this;
    }

    public function getOpeningFridayAfternon(): ?\DateTimeInterface
    {
        return $this->openingFridayAfternon;
    }

    public function setOpeningFridayAfternon(\DateTimeInterface $openingFridayAfternon): static
    {
        $this->openingFridayAfternon = $openingFridayAfternon;

        return $this;
    }

    public function getClosingFridayAfternoon(): ?\DateTimeInterface
    {
        return $this->closingFridayAfternoon;
    }

    public function setClosingFridayAfternoon(\DateTimeInterface $closingFridayAfternoon): static
    {
        $this->closingFridayAfternoon = $closingFridayAfternoon;

        return $this;
    }

    public function getOpeningSaturdayMorning(): ?\DateTimeInterface
    {
        return $this->openingSaturdayMorning;
    }

    public function setOpeningSaturdayMorning(\DateTimeInterface $openingSaturdayMorning): static
    {
        $this->openingSaturdayMorning = $openingSaturdayMorning;

        return $this;
    }

    public function getClosingSaturdayMorning(): ?\DateTimeInterface
    {
        return $this->closingSaturdayMorning;
    }

    public function setClosingSaturdayMorning(\DateTimeInterface $closingSaturdayMorning): static
    {
        $this->closingSaturdayMorning = $closingSaturdayMorning;

        return $this;
    }

    public function getOpeningSaturdayAfternoon(): ?\DateTimeInterface
    {
        return $this->openingSaturdayAfternoon;
    }

    public function setOpeningSaturdayAfternoon(\DateTimeInterface $openingSaturdayAfternoon): static
    {
        $this->openingSaturdayAfternoon = $openingSaturdayAfternoon;

        return $this;
    }

    public function getClosingSaturdayAfternoon(): ?\DateTimeInterface
    {
        return $this->closingSaturdayAfternoon;
    }

    public function setClosingSaturdayAfternoon(\DateTimeInterface $closingSaturdayAfternoon): static
    {
        $this->closingSaturdayAfternoon = $closingSaturdayAfternoon;

        return $this;
    }

    public function getOpeningSundayMorning(): ?\DateTimeInterface
    {
        return $this->openingSundayMorning;
    }

    public function setOpeningSundayMorning(\DateTimeInterface $openingSundayMorning): static
    {
        $this->openingSundayMorning = $openingSundayMorning;

        return $this;
    }

    public function getClosingSundayMorning(): ?\DateTimeInterface
    {
        return $this->closingSundayMorning;
    }

    public function setClosingSundayMorning(\DateTimeInterface $closingSundayMorning): static
    {
        $this->closingSundayMorning = $closingSundayMorning;

        return $this;
    }

    public function getOpeningSundayAfternoon(): ?\DateTimeInterface
    {
        return $this->openingSundayAfternoon;
    }

    public function setOpeningSundayAfternoon(\DateTimeInterface $openingSundayAfternoon): static
    {
        $this->openingSundayAfternoon = $openingSundayAfternoon;

        return $this;
    }

    public function getClosingSundayAfternoon(): ?\DateTimeInterface
    {
        return $this->closingSundayAfternoon;
    }

    public function setClosingSundayAfternoon(\DateTimeInterface $closingSundayAfternoon): static
    {
        $this->closingSundayAfternoon = $closingSundayAfternoon;

        return $this;
    }
}
