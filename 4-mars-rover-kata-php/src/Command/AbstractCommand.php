<?php


namespace Kata\Command;


use Kata\Command;
use Kata\Rover;

abstract class AbstractCommand implements Command
{
    /** @var Rover $rover */
    protected $rover;

    /**
     * @param Rover $rover
     */
    public function __construct($rover)
    {
        $this->rover = $rover;
    }
}