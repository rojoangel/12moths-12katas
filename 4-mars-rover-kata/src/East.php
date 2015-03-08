<?php


namespace Kata;


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
     */
    public function moveForward(Rover $rover)
    {
        $rover->getGrid()->moveXForward($rover);
    }

    /**
     * @param Rover $rover
     */
    public function moveBackward(Rover $rover)
    {
        $rover->getGrid()->moveXBackward($rover);
    }
}
