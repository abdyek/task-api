<?php

namespace App\EventListener;

use App\Service\History;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;

class AuthenticationSuccessListener
{
    public function __construct(History $history)
    {
        $this->history = $history;
    }
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $user = $event->getUser();

        $this->history->addToSignInHistory($user);

        if (!$user instanceof UserInterface) {
            return;
        }


    }
}
