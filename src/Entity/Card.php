<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CardRepository")
 */
class Card
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $bookId;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lend;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $returned;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookId(): ?int
    {
        return $this->bookId;
    }

    public function setBookId(int $bookId): self
    {
        $this->bookId = $bookId;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getLend(): ?\DateTimeInterface
    {
        return $this->lend;
    }

    public function setLend(\DateTimeInterface $lend): self
    {
        $this->lend = $lend;

        return $this;
    }

    public function getReturned(): ?\DateTimeInterface
    {
        return $this->returned;
    }

    public function setReturned(?\DateTimeInterface $returned): self
    {
        $this->returned = $returned;

        return $this;
    }
}
