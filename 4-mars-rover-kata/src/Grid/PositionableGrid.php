<?php


namespace Kata\Grid;


use Kata\Grid;
use Kata\Obstacle;
use Kata\Position;

abstract class PositionableGrid implements Grid
{

    /** @var Obstacle[] $obstacles */
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
     * @param Obstacle $obstacle
     */
    public function addObstacle(Obstacle $obstacle)
    {
        $this->obstacles[$obstacle->getPosition()->__toString()] = $obstacle;
    }

    /**
     * @param Position $position
     * @throws CollisionDetectedException
     */
    private function detectCollision(Position $position)
    {
        if (array_key_exists($position->__toString(), $this->obstacles)) {
            throw new CollisionDetectedException($this->obstacles[$position->__toString()]);
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
