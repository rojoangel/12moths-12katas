<?php


namespace Kata;


class Rover
{

    /** @var Direction $direction */
    private $direction;

    /** @var Grid $grid */
    private $grid;

    /**
     * @param Direction $direction
     * @param Grid $grid
     */
    public function __construct(Direction $direction, Grid $grid)
    {
        $this->direction = $direction;
        $this->grid = $grid;
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
     * @return Grid
     */
    public function getGrid()
    {
        return $this->grid;
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->getGrid()->getPosition();
    }

    public function turnLeft()
    {
        $this->direction->turnLeft($this);
    }

    public function turnRight()
    {
        $this->direction->turnRight($this);
    }

    public function moveForward()
    {
        $this->direction->moveForward($this);
    }

    public function moveBackward()
    {
        $this->direction->moveBackward($this);
    }
}
