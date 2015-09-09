<?php


namespace Kata\Grid;

use Kata\Position;

class RectangularGrid extends PositionableGrid
{

    /** @var integer $xSize */
    private $xSize;

    /** @var integer $ySize */
    private $ySize;

    /**
     * @param $xSize
     * @param $ySize
     */
    public function __construct($xSize, $ySize)
    {
        $this->xSize = $xSize;
        $this->ySize = $ySize;
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveYForward(Position $position)
    {
        return $this->wrapTopYEdge(parent::moveYForward($position));
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveYBackward(Position $position)
    {

        return $this->wrapBottomYEdge(parent::moveYBackward($position));
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveXForward(Position $position)
    {

        return $this->wrapXTopEdge(parent::moveXForward($position));
    }

    /**
     * @param Position $position
     * @return Position
     * @throw CollisionDetectedException
     */
    public function moveXBackward(Position $position)
    {
        return $this->wrapXBottomEdge(parent::moveXBackward($position));
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    private function wrapTopYEdge(Position $position)
    {
        $newPosition = $position;
        if ($position->getYCoordinate() >= $this->ySize) {
            $newPosition = $this->tryToGetPositionAt($position->getXCoordinate(), 0);
        }
        return $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    private function wrapBottomYEdge(Position $position)
    {
        $newPosition = $position;
        if ($position->getYCoordinate() < 0) {
            $newPosition = $this->tryToGetPositionAt($position->getXCoordinate(), $this->ySize - 1);
        }
        return $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    private function wrapXTopEdge(Position $position)
    {
        $newPosition = $position;
        if ($position->getXCoordinate() >= $this->xSize) {
            $newPosition = $this->tryToGetPositionAt(0, $position->getYCoordinate());
        }
        return $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    private function wrapXBottomEdge(Position $position)
    {
        $newPosition = $position;
        if ($position->getXCoordinate() < 0) {
            $newPosition = $this->tryToGetPositionAt($this->xSize - 1, $position->getYCoordinate());
        }
        return $newPosition;
    }
}
