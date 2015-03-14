<?php


namespace Kata\Grid;


use Kata\Grid;
use Kata\Position;

abstract class PositionableGrid implements Grid
{

    /**
     * @param Position $position
     * @return Position
     */
    public function moveYForward(Position $position)
    {
        return new Position(
            $position->getXCoordinate(),
            $position->getYCoordinate() + 1
        );
    }

    /**
     * @param Position $position
     * @return Position
     */
    public function moveYBackward(Position $position)
    {
        return new Position(
            $position->getXCoordinate(),
            $position->getYCoordinate() - 1
        );
    }

    /**
     * @param Position $position
     * @return Position
     */
    public function moveXForward(Position $position)
    {
        return new Position(
            $position->getXCoordinate() + 1,
            $position->getYCoordinate()
        );
    }

    /**
     * @param Position $position
     * @return Position
     */
    public function moveXBackward(Position $position)
    {
        return new Position(
            $position->getXCoordinate() - 1,
            $position->getYCoordinate()
        );
    }
}
