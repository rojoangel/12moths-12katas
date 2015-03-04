<?php


namespace Kata;


class East implements Direction
{

    public function turnLeft()
    {
        return new North();
    }

    public function turnRight()
    {
        return new South();
    }
}
