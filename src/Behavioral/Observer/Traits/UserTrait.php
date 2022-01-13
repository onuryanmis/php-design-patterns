<?php

namespace App\Behavioral\Observer\Traits;

use App\Behavioral\Observer\Schema\UserSchema;

trait UserTrait
{
    /** @var UserSchema $user */
    private UserSchema $user;

    /**
     * @return UserSchema
     */
    public function getUser(): UserSchema
    {
        return $this->user;
    }

    /**
     * @param UserSchema $user
     *
     * @return $this
     */
    public function setUser(UserSchema $user): self
    {
        $this->user = $user;

        return $this;
    }
}