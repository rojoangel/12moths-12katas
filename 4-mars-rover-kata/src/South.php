<?php


namespace Kata;


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
        $rover->getPosition()->moveYBackward();
    }
}
