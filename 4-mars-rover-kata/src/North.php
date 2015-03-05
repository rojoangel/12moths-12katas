<?php


namespace Kata;


class North implements Direction
{

    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new West());
    }


    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new East());
    }
}
