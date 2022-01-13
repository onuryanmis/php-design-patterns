<?php

namespace App\Behavioral\Observer\EventListener;

use App\Behavioral\Observer\Event\UserEvent;
use SplObserver;
use SplSubject;

class RegisterMailListener implements SplObserver
{
    /**
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject): void
    {
        // ... send email
        /** @var UserEvent $subject */
        echo "\nUser Register Email\n"
            . "First Name : " . $subject->getUser()->getFirstName()."\n"
            . "Last Name : " . $subject->getUser()->getFirstName()."\n";
    }
}