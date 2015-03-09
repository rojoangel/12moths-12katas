<?php


namespace Kata\Command;


use Kata\Command;
use Kata\Rover;

class MoveForwardCommand implements Command
{

    /** @var Rover $rover */
    private $rover;

    /**
     * @param Rover $rover
     */
    public function __construct($rover)
    {
        $this->rover = $rover;
    }

    public function execute()
    {
        $this->rover->moveForward();
    }
}
