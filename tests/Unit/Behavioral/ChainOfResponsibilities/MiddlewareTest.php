<?php

namespace App\Tests\Unit\Behavioral\ChainOfResponsibilities;

use App\Behavioral\ChainOfResponsibilities\Definition\RoleDefinition;
use App\Behavioral\ChainOfResponsibilities\Exception\RoleException;
use App\Behavioral\ChainOfResponsibilities\Exception\StatusException;
use App\Behavioral\ChainOfResponsibilities\Middleware\RoleCheckerMiddleware;
use App\Behavioral\ChainOfResponsibilities\Middleware\StatusCheckerMiddleware;
use App\Behavioral\ChainOfResponsibilities\Model\User;
use PHPUnit\Framework\TestCase;

class MiddlewareTest extends TestCase
{
    /**
     * @var StatusCheckerMiddleware $statusCheckerMiddleware
     */
    private StatusCheckerMiddleware $statusCheckerMiddleware;

    /**
     * @var RoleCheckerMiddleware $roleCheckerMiddleware
     */
    private RoleCheckerMiddleware $roleCheckerMiddleware;

    protected function setUp(): void
    {
        $this->statusCheckerMiddleware = new StatusCheckerMiddleware();
        $this->roleCheckerMiddleware   = new RoleCheckerMiddleware();
    }

    public function testSuccess(): void
    {
        $roleChecker = $this->roleCheckerMiddleware->setRole(RoleDefinition::ROLE_SUPER_ADMIN);
        $this->statusCheckerMiddleware->add($roleChecker);

        $this->assertTrue($this->statusCheckerMiddleware->check($this->exampleUser()));
    }

    public function testRoleException(): void
    {
        $user = $this->exampleUser();

        $this->expectException(RoleException::class);
        $roleChecker = $this->roleCheckerMiddleware->setRole(RoleDefinition::ROLE_EDITOR);
        $this->statusCheckerMiddleware->add($roleChecker);
        $this->assertTrue($this->statusCheckerMiddleware->check($user));
    }

    public function testStatusException(): void
    {
        $user = $this->exampleUser()->setActive(false);

        $this->expectException(StatusException::class);
        $roleChecker = $this->roleCheckerMiddleware->setRole(RoleDefinition::ROLE_SUPER_ADMIN);
        $this->statusCheckerMiddleware->add($roleChecker);
        $this->assertTrue($this->statusCheckerMiddleware->check($user));
    }

    /**
     * @return User
     */
    protected function exampleUser(): User
    {
        return (new User())
            ->setUserName('onur')
            ->setPassword('123')
            ->setEmail('test@example.com')
            ->setActive(true)
            ->setRoles([RoleDefinition::ROLE_SUPER_ADMIN]);
    }
}