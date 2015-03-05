<?php


namespace Kata;


class East implements Direction
{

    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new North());
    }

    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new South());
    }
}
