<?php


namespace Kata;


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
     */
    public function moveForward(Rover $rover)
    {
        $rover->getPosition()->moveYForward();
    }

    /**
     * @param Rover $rover
     */
    public function moveBackward(Rover $rover)
    {
        $rover->getPosition()->moveYBackward();
    }
}
