<?php


namespace Kata\Grid;


use Kata\Grid;
use Kata\Position;

abstract class PositionableGrid implements Grid
{

    /** @var Position[] $obstacles */
    private $obstacles = array();

    /**
     * @param Position $position
     * @return Position
     */
    public function moveYForward(Position $position)
    {
        $newPosition = new Position(
            $position->getXCoordinate(),
            $position->getYCoordinate() + 1
        );
        return $this->detectCollision($newPosition) ? $position : $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    public function moveYBackward(Position $position)
    {
        $newPosition = new Position(
            $position->getXCoordinate(),
            $position->getYCoordinate() - 1
        );
        return $this->detectCollision($newPosition) ? $position : $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    public function moveXForward(Position $position)
    {
        $newPosition = new Position(
            $position->getXCoordinate() + 1,
            $position->getYCoordinate()
        );

        return $this->detectCollision($newPosition) ? $position : $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    public function moveXBackward(Position $position)
    {
        $newPosition = new Position(
            $position->getXCoordinate() - 1,
            $position->getYCoordinate()
        );
        return $this->detectCollision($newPosition) ? $position : $newPosition;
    }

    /**
     * @param Position $obstacle
     */
    public function addObstacle(Position $obstacle)
    {
        $this->obstacles[] = $obstacle;
    }

    /**
     * @param Position $position
     * @return bool
     */
    protected function detectCollision(Position $position)
    {
        return in_array($position, $this->obstacles);
    }
}
