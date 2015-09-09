<?php


namespace Kata\Direction;

use Kata\Direction;
use Kata\Grid\CollisionDetectedException;
use Kata\Rover;

class East implements Direction
{

    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new North());
    }

    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new South());
    }

    /**
     * @param Rover $rover
     * @throws CollisionDetectedException
     */
    public function moveForward(Rover $rover)
    {
        $rover->setPosition($rover->getGrid()->moveXForward($rover->getPosition()));
    }

    /**
     * @param Rover $rover
     * @throws CollisionDetectedException
     */
    public function moveBackward(Rover $rover)
    {
        $rover->setPosition($rover->getGrid()->moveXBackward($rover->getPosition()));
    }
}
