<?php


namespace Kata;




use Kata\Grid\CollisionDetectedException;

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
     * @throws CollisionDetectedException
     */
    public function moveForward(Rover $rover);

    /**
     * @param Rover $rover
     * @throws CollisionDetectedException
     */
    public function moveBackward(Rover $rover);
}
