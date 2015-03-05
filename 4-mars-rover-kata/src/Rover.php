<?php


namespace Kata;


class Rover
{

    /** @var Direction $direction */
    private $direction;

    /** @var Position $position */
    private $position;

    /**
     * @param Direction $direction
     * @param Position $position
     */
    public function __construct(Direction $direction, Position $position)
    {
        $this->direction = $direction;
        $this->position = $position;
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

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param Position $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
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
