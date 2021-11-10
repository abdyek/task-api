<?php

namespace App\Entity;

use App\Repository\SignInHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SignInHistoryRepository::class)
 */
class SignInHistory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(type="datetime")
     */
    private $historyDateTime;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getHistoryDateTime(): ?\DateTimeInterface
    {
        return $this->historyDateTime;
    }

    public function setHistoryDateTime(\DateTimeInterface $historyDateTime): self
    {
        $this->historyDateTime = $historyDateTime;

        return $this;
    }

}
