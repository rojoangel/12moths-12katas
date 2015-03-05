<?php


namespace Kata;


interface Direction
{

    /**
     * @return Position
     */
    public function getPosition();

    /**
     * @return Direction
     */
    public function turnLeft();

    /**
     * @return Direction
     */
    public function turnRight();

    /**
     * @return Direction
     */
    public function moveForward();
}
