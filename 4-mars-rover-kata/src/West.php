<?php


namespace Kata;


class West implements Direction
{

    public function turnLeft()
    {
        return new South();
    }

    public function turnRight()
    {
        return new North();
    }
}
