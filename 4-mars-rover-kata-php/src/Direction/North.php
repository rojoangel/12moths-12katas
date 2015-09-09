<?php


namespace Kata\Direction;


use Kata\Direction;
use Kata\Grid\CollisionDetectedException;
use Kata\Rover;

class North implements Direction
{

    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new West());
    }


    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new East());
    }

    /**
     * @param Rover $rover
     * @throws CollisionDetectedException
     */
    public function moveForward(Rover $rover)
    {
        $rover->setPosition($rover->getGrid()->moveYForward($rover->getPosition()));
    }

    /**
     * @param Rover $rover
     * @throws CollisionDetectedException
     */
    public function moveBackward(Rover $rover)
    {
        $rover->setPosition($rover->getGrid()->moveYBackward($rover->getPosition()));
    }
}
