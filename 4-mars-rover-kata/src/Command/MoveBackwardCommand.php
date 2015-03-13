<?php


namespace Kata\Command;


use Kata\Command;

class MoveBackwardCommand extends AbstractCommand
{

    public function execute()
    {
        $this->rover->moveBackward();
    }
}
