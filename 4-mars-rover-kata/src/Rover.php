<?php


namespace Kata;


class Rover
{

    /** @var Direction $direction */
    private $direction;

    /**
     * @param Direction $direction
     */
    public function __construct(Direction $direction)
    {
        $this->direction = $direction;
    }

    public function turnLeft()
    {
        $this->direction = $this->direction->turnLeft();
    }

    public function turnRight()
    {
        $this->direction = $this->direction->turnRight();
    }

    public function moveForward()
    {
        $this->direction = $this->direction->moveForward();
    }

    /**
     * @return Direction
     */
    public function getDirection()
    {
        return $this->direction;
    }

    public function getPosition()
    {
        return $this->direction->getPosition();
    }
}
