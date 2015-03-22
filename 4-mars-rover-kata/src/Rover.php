<?php


namespace Kata;


use Kata\Direction;
use Kata\Grid\CollisionDetectedException;

class Rover
{

    /** @var Direction $direction */
    private $direction;

    /** @var Position $position */
    private $position;

    /** @var Grid $grid */
    private $grid;

    /**
     * @param Direction $direction
     * @param Position $position
     * @param Grid $grid
     */
    public function __construct(Direction $direction, Position $position, Grid $grid)
    {
        $this->direction = $direction;
        $this->position = $position;
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

    /**
     * @throws CollisionDetectedException
     */
    public function moveForward()
    {
        $this->direction->moveForward($this);
    }

    /**
     * @throws CollisionDetectedException
     */
    public function moveBackward()
    {
        $this->direction->moveBackward($this);
    }
}
