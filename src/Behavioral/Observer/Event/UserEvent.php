<?php

namespace App\Behavioral\Observer\Event;

use App\Behavioral\Observer\Traits\UserTrait;
use SplObjectStorage;
use SplObserver;
use SplSubject;

class UserEvent implements SplSubject
{
    use UserTrait;

    /** @var SplObjectStorage $observers */
    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}