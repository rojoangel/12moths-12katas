<?php


namespace Kata;




interface Direction
{

    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover);

    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover);

    /**
     * @param Rover $rover
     */
    public function moveForward(Rover $rover);

    /**
     * @param Rover $rover
     */
    public function moveBackward(Rover $rover);
}
