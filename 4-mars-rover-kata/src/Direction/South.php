<?php


namespace Kata\Direction;


use Kata\Direction;
use Kata\Rover;

class South implements Direction
{

    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new East());
    }

    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new West());
    }

    /**
     * @param Rover $rover
     */
    public function moveForward(Rover $rover)
    {
        $rover->getGrid()->moveYBackward($rover);
    }

    /**
     * @param Rover $rover
     */
    public function moveBackward(Rover $rover)
    {
        $rover->getGrid()->moveYForward($rover);
    }
}