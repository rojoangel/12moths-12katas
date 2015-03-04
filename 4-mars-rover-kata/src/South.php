<?php


namespace Kata;


class South implements Direction
{

    public function turnLeft()
    {
        return new East();
    }

    public function turnRight()
    {
        return new West();
    }
}
