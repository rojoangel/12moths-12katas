<?php


namespace Kata;


class North implements Direction
{

    public function turnLeft()
    {
        return new West();
    }


    public function turnRight()
    {
        return new East();
    }
}
