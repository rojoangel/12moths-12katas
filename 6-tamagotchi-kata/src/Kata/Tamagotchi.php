<?php
/**
 * Created by PhpStorm.
 * User: arojomarijuan
 * Date: 8/6/2015
 * Time: 7:45 PM
 */

namespace Kata;


class Tamagotchi
{

    private $hungriness;
    private $fullness;
    private $happiness;
    private $tiredness;

    public function __construct($hungriness, $fullness, $happiness, $tiredness)
    {
        $this->hungriness = $hungriness;
        $this->fullness = $fullness;
        $this->happiness = $happiness;
        $this->tiredness = $tiredness;
    }

    /**
     * @return mixed
     */
    public function getHappiness()
    {
        return $this->happiness;
    }

    /**
     * @return mixed
     */
    public function getTiredness()
    {
        return $this->tiredness;
    }


    public function feed()
    {
        $this->hungriness--;
        $this->fullness++;
    }

    public function getHungriness()
    {
        return $this->hungriness;
    }

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
}