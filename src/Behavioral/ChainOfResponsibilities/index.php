<?php

use App\Behavioral\ChainOfResponsibilities\Definition\RoleDefinition;
use App\Behavioral\ChainOfResponsibilities\Middleware\RoleCheckerMiddleware;
use App\Behavioral\ChainOfResponsibilities\Middleware\StatusCheckerMiddleware;
use App\Behavioral\ChainOfResponsibilities\Model\User;

require_once "../../../vendor/autoload.php";

$user = (new User())
    ->setUserName('onur')
    ->setPassword('123')
    ->setEmail('test@example.com')
    ->setActive(true)
    ->setRoles([RoleDefinition::ROLE_SUPER_ADMIN]);

$statusChecker = new StatusCheckerMiddleware();
$roleChecker   = (new RoleCheckerMiddleware())->setRole(RoleDefinition::ROLE_SUPER_ADMIN);

$statusChecker->add($roleChecker);
$statusChecker->check($user);

echo 'Successful!';