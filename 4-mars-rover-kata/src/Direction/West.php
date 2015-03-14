<?php


namespace Kata\Direction;


use Kata\Direction;


use Kata\Rover;

class West implements Direction
{

    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new South());
    }

    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new North());
    }

    /**
     * @param Rover $rover
     */
    public function moveForward(Rover $rover)
    {
        $rover->setPosition($rover->getGrid()->moveXBackward($rover->getPosition()));
    }

    /**
     * @param Rover $rover
     */
    public function moveBackward(Rover $rover)
    {
        $rover->setPosition($rover->getGrid()->moveXForward($rover->getPosition()));
    }
}
