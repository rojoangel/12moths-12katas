<?php


namespace Kata;


class West implements Direction
{

    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new South());
    }

    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new North());
    }
}
