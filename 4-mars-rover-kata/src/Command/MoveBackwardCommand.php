<?php


namespace Kata\Command;


use Kata\Command;
use Kata\Grid\CollisionDetectedException;

class MoveBackwardCommand extends AbstractCommand
{

    /**
     * @throws CollisionDetectedException
     */
    public function execute()
    {
        $this->rover->moveBackward();
    }
}
