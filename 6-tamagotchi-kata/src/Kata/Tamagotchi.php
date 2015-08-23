<?php

namespace Kata;

class Tamagotchi implements TimeObserver
{

    /** @var int */
    private $hungriness;

    /** @var int */
    private $fullness;

    /** @var int */
    private $happiness;

    /** @var int */
    private $tiredness;

    /**
     * @param int $hungriness
     * @param int $fullness
     * @param int $happiness
     * @param int $tiredness
     */
    public function __construct($hungriness, $fullness, $happiness, $tiredness)
    {
        $this->hungriness = $hungriness;
        $this->fullness = $fullness;
        $this->happiness = $happiness;
        $this->tiredness = $tiredness;
    }

    /**
     * @return int
     */
    public function getHappiness()
    {
        return $this->happiness;
    }

    /**
     * @return int
     */
    public function getTiredness()
    {
        return $this->tiredness;
    }

    /**
     * @return int
     */
    public function getHungriness()
    {
        return $this->hungriness;
    }

    /**
     * @return int
     */
    public function getFullness()
    {
        return $this->fullness;
    }

    public function passTime()
    {
        $this->tiredness++;
        $this->hungriness++;
        $this->happiness--;
    }

    public function feed()
    {
        $this->hungriness--;
        $this->fullness++;
    }

    public function play()
    {
        $this->happiness++;
        $this->tiredness++;
    }

    public function toBed()
    {
        $this->tiredness--;
    }

    public function poop()
    {
        $this->fullness--;
    }

    public function tick(Timer $timer)
    {
        // TODO: Implement tick() method.
    }
}