<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BoardRepository")
 */
class Board
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=190)
     * @ORM\Id
     */
    private $mac;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Place;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $LastSeen;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Sync;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Calendar", mappedBy="board")
     */
    private $calendars;

    public function __construct()
    {
        $this->calendars = new ArrayCollection();
    }

    /**
     * @return Collection|Calendar[]
     */
    public function getProducts(): Collection
    {
        return $this->calendars;
    }


    public function getPlace(): ?string
    {
        return $this->Place;
    }

    public function setPlace(?string $Place): self
    {
        $this->Place = $Place;

        return $this;
    }

    public function getLastSeen(): ?\DateTimeInterface
    {
        return $this->LastSeen;
    }

    public function setLastSeen(?\DateTimeInterface $LastSeen): self
    {
        $this->LastSeen = $LastSeen;

        return $this;
    }

    public function getSync(): ?bool
    {
        return $this->Sync;
    }

    public function setSync(bool $Sync): self
    {
        $this->Sync = $Sync;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * @param mixed $mac
     */
    public function setMac($mac): void
    {
        $this->mac = $mac;
    }

    public function addCalendar(Calendar $calendar): Board
    {
        $this->calendars->add($calendar);

        return $this;
    }

    public function removeCalendar(Calendar $calendar)
    {
        $this->calendars->remove($calendar);
        return $this;
    }

    public function getCalendars()
    {
        return $this->calendars;
    }
    public function __toString()
    {
        return $this->getMac();
    }
}
