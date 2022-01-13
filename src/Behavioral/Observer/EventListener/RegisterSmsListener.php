<?php

namespace App\Behavioral\Observer\EventListener;

use App\Behavioral\Observer\Event\UserEvent;
use SplObserver;
use SplSubject;

class RegisterSmsListener implements SplObserver
{
    /**
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject): void
    {
        // ... send sms
        /** @var UserEvent $subject */
        echo "\nUser Register Sms\n"
            . "First Name : " . $subject->getUser()->getFirstName()."\n"
            . "Last Name : " . $subject->getUser()->getFirstName()."\n";
    }
}