<?php


namespace Kata;


class South implements Direction
{

    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new East());
    }

    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new West());
    }
}
