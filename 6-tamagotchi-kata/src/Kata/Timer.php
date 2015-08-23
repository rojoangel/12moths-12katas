<?php

namespace Kata;

class Timer
{
    /** @var TimeObserver[] */
    private $observers = [];
    
    /**
     * @param TimeObserver $observerIn
     */
    public function attach(TimeObserver $observerIn)
    {
        $this->observers[] = $observerIn;
    }

    /**
     * @param TimeObserver $observerOut
     */
    public function detach(TimeObserver $observerOut)
    {
        foreach($this->observers as $key=>$observer) {
            if ($observer === $observerOut) {
                unset($this->observers[$key]);
            }
        }
    }

    private function notify() {
        foreach($this->observers as $observer) {
            $observer->tick($this);
        }
    }


}