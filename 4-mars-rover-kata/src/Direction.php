<?php


namespace Kata;


interface Direction
{

    /**
     * @param Rover $rover
     * @return Direction
     */
    public function turnLeft(Rover $rover);

    /**
     * @param Rover $rover
     * @return Direction
     */
    public function turnRight(Rover $rover);
}
