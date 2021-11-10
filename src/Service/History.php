<?php

namespace App\Service;

use App\Entity\User;
use App\Entity\SignInHistory;
use Doctrine\ORM\EntityManagerInterface;

class History
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function addToSignInHistory(User $user): void
    {
        $history = new SignInHistory();
        $history->setUserId($user->getId());
        $current = new \DateTime();
        $history->setHistoryDateTime($current);
        $this->entityManager->persist($history);
        $this->entityManager->flush();
    }
}
