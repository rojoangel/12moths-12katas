<?php


namespace Kata\Command;


use Kata\Command;

class TurnLeftCommand extends AbstractCommand
{

    public function execute()
    {
        $this->rover->turnLeft();
    }
}
