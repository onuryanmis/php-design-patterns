<?php

require_once "../../../vendor/autoload.php";

use App\Behavioral\Observer\Event\UserEvent;
use App\Behavioral\Observer\EventListener\RegisterMailListener;
use App\Behavioral\Observer\EventListener\RegisterSmsListener;
use App\Behavioral\Observer\Schema\UserSchema;

$event = new UserEvent();
$event->attach(new RegisterSmsListener());
$event->attach(new RegisterMailListener());

$user = (new UserSchema())->setFirstName('Onur')->setLastName('Yanmış');
// .....
// insert new user in database...
// .....
$event->setUser($user);
$event->notify();
