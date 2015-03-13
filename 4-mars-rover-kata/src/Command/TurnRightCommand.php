<?php


namespace Kata\Command;


use Kata\Command;
use Kata\Rover;

class TurnRightCommand extends AbstractCommand
{

    public function execute()
    {
        $this->rover->turnRight();
    }
}
