<?php


namespace Kata\Command;


use Kata\Command;

class MoveForwardCommand extends AbstractCommand
{

    public function execute()
    {
        $this->rover->moveForward();
    }
}
