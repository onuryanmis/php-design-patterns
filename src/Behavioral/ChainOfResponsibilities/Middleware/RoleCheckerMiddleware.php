<?php

namespace App\Behavioral\ChainOfResponsibilities\Middleware;

use App\Behavioral\ChainOfResponsibilities\Exception\RoleException;
use App\Behavioral\ChainOfResponsibilities\Model\User;
use App\Behavioral\ChainOfResponsibilities\Trait\RoleTrait;

class RoleCheckerMiddleware extends Middleware
{
    use RoleTrait;

    /**
     * @inheritDoc
     *
     * @throws RoleException
     */
    public function check(User $user): bool
    {
        if(!in_array($this->getRole(), $user->getRoles())) {
            throw new RoleException();
        }

        return $this->next($user);
    }
}