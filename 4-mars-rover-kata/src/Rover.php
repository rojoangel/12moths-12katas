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

    /**
     * @return Direction
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param Direction $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    public function turnLeft()
    {
        $this->direction->turnLeft($this);
    }

    public function turnRight()
    {
        $this->direction->turnRight($this);
    }
}
