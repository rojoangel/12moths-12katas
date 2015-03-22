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
     * @throws CollisionDetectedException
     */
    public function moveYForward(Position $position)
    {
        return $this->tryToGetPositionAt(
            $position->getXCoordinate(),
            $position->getYCoordinate() + 1
        );
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveYBackward(Position $position)
    {
        return $this->tryToGetPositionAt(
            $position->getXCoordinate(),
            $position->getYCoordinate() - 1
        );
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveXForward(Position $position)
    {
        return $this->tryToGetPositionAt(
            $position->getXCoordinate() + 1,
            $position->getYCoordinate()
        );
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveXBackward(Position $position)
    {
        return $this->tryToGetPositionAt(
            $position->getXCoordinate() - 1,
            $position->getYCoordinate()
        );
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
     * @throws CollisionDetectedException
     */
    private function detectCollision(Position $position)
    {
        if (in_array($position, $this->obstacles)) {
            throw new CollisionDetectedException();
        }
    }

    /**
     * @param $xCoordinate
     * @param $yCoordinate
     * @return Position
     * @throws CollisionDetectedException
     */
    protected function tryToGetPositionAt($xCoordinate, $yCoordinate)
    {
        $newPosition =  new Position(
            $xCoordinate,
            $yCoordinate
        );

        $this->detectCollision($newPosition);
        return $newPosition;
    }
}
