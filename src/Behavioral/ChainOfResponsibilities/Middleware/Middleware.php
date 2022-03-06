<?php

namespace App\Behavioral\ChainOfResponsibilities\Middleware;

use App\Behavioral\ChainOfResponsibilities\Model\User;

abstract class Middleware
{
    /**
     * @var Middleware|null $next
     */
    private ?Middleware $next = null;

    /**
     * @param Middleware $middleware
     *
     * @return $this
     */
    public function add(Middleware $middleware): self
    {
        $this->next = $middleware;

        return $this;
    }

    /**
     * @param User $user
     *
     * @return bool
     */
    public abstract function check(User $user): bool;

    /**
     * @param User $user
     *
     * @return bool
     */
    public function next(User $user): bool
    {
        if (!$this->next) {
            return true;
        }

        return $this->next->check($user);
    }
}