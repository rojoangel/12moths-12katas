<?php

namespace Kata;

use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use React\EventLoop\Timer\TimerInterface;

class Timer
{
    /** @var TimeObserver[] */
    private $observers = [];

    /** @var LoopInterface */
    private $loop;

    /** @var TimerInterface $timer */
    private $timer;

    /**
     * @param $interval
     * @param int $maxIterations
     */
    function __construct($interval, $maxIterations)
    {
        $this->loop = Factory::create();
        $counter = 0;
        $this->timer = $this->loop->addPeriodicTimer(
            $interval,
            function() use (&$counter, $maxIterations) {
                $counter++;
                $this->notify();
                if ($counter >= $maxIterations) {
                    $this->stop();
                }
            });
    }

    public function start() {
        $this->loop->run();
    }

    public function stop() {
        $this->loop->cancelTimer($this->timer);
    }

    /**
     * @return bool
     */
    public function isStarted() {
        return $this->loop->isTimerActive($this->timer);
    }

    /**
     * @return bool
     */
    public function isStopped() {
        return ! $this->isStarted();
    }

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
            $observer->timePassed($this);
        }
    }
}