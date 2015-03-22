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
     */
    public function moveYForward(Position $position)
    {
        $newPosition = $this->wrapTopYEdge(parent::moveYForward($position));
        return $this->detectCollision($newPosition) ? $position : $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    public function moveYBackward(Position $position)
    {

        $newPosition = $this->wrapBottomYEdge(parent::moveYBackward($position));
        return $this->detectCollision($newPosition) ? $position : $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    public function moveXForward(Position $position)
    {

        $newPosition = $this->wrapXTopEdge(parent::moveXForward($position));
        return $this->detectCollision($newPosition) ? $position : $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    public function moveXBackward(Position $position)
    {
        $newPosition = $this->wrapXBottomEdge(parent::moveXBackward($position));
        return $this->detectCollision($newPosition) ? $position : $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    private function wrapTopYEdge(Position $position)
    {
        $newPosition = $position;
        if ($position->getYCoordinate() >= $this->ySize) {
            $newPosition = new Position($position->getXCoordinate(), 0);
        }
        return $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    private function wrapBottomYEdge(Position $position)
    {
        $newPosition = $position;
        if ($position->getYCoordinate() < 0) {
            $newPosition = new Position($position->getXCoordinate(), $this->ySize - 1);
        }
        return $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    private function wrapXTopEdge(Position $position)
    {
        $newPosition = $position;
        if ($position->getXCoordinate() >= $this->xSize) {
            $newPosition = new Position(0, $position->getYCoordinate());
        }
        return $newPosition;
    }

    /**
     * @param Position $position
     * @return Position
     */
    private function wrapXBottomEdge(Position $position)
    {
        $newPosition = $position;
        if ($position->getXCoordinate() < 0) {
            $newPosition = new Position($this->xSize - 1, $position->getYCoordinate());
        }
        return $newPosition;
    }
}
