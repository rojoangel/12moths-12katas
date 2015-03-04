<?php


namespace Kata;


interface Direction
{

    /**
     * @return Direction
     */
    public function turnLeft();

    /**
     * @return Direction
     */
    public function turnRight();
}
