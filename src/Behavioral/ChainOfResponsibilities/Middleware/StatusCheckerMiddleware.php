<?php

namespace App\Behavioral\ChainOfResponsibilities\Middleware;

use App\Behavioral\ChainOfResponsibilities\Exception\StatusException;
use App\Behavioral\ChainOfResponsibilities\Model\User;

class StatusCheckerMiddleware extends Middleware
{
    /**
     * @inheritDoc
     *
     * @throws StatusException
     */
    public function check(User $user): bool
    {
        if (!$user->isActive()) {
            throw new StatusException();
        }

        return $this->next($user);
    }
}