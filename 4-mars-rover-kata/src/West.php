<?php


namespace Kata;


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
        $rover->getPosition()->moveXBackward();
    }
}
