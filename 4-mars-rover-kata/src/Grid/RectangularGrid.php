<?php


namespace Kata\Grid;

use Kata\Position;
use Kata\Rover;

class RectangularGrid extends PositionableGrid
{

    /** @var integer $xSize */
    private $xSize;

    /** @var integer $ySize */
    private $ySize;

    public function __construct($xSize, $ySize)
    {
        $this->xSize = $xSize;
        $this->ySize = $ySize;
    }

    public function moveYForward(Rover $rover)
    {
        parent::moveYForward($rover);
        $this->wrapTopYEdge($rover);
    }

    public function moveYBackward(Rover $rover)
    {
        parent::moveYBackward($rover);
        $this->wrapBottomYEdge($rover);
    }

    public function moveXForward(Rover $rover)
    {
        parent::moveXForward($rover);
        $this->wrapXTopEdge($rover);
    }

    public function moveXBackward(Rover $rover)
    {
        parent::moveXBackward($rover);
        $this->wrapXBottomEdge($rover);
    }

    /**
     * @param Rover $rover
     */
    private function wrapTopYEdge(Rover $rover)
    {
        if ($rover->getPosition()->getYCoordinate() >= $this->ySize) {
            $rover->setPosition(
                new Position(
                    $rover->getPosition()->getXCoordinate(),
                    0
                )
            );
        }
    }

    /**
     * @param Rover $rover
     */
    private function wrapBottomYEdge(Rover $rover)
    {
        if ($rover->getPosition()->getYCoordinate() < 0) {
            $rover->setPosition(
                new Position(
                    $rover->getPosition()->getXCoordinate(),
                    $this->ySize - 1
                )
            );
        }
    }

    /**
     * @param Rover $rover
     */
    private function wrapXTopEdge(Rover $rover)
    {
        if ($rover->getPosition()->getXCoordinate() >= $this->xSize) {
            $rover->setPosition(
                new Position(
                    0,
                    $rover->getPosition()->getYCoordinate()
                )
            );
        }
    }

    /**
     * @param Rover $rover
     */
    private function wrapXBottomEdge(Rover $rover)
    {
        if ($rover->getPosition()->getXCoordinate() < 0) {
            $rover->setPosition(
                new Position(
                    $this->xSize - 1,
                    $rover->getPosition()->getYCoordinate()
                )
            );
        }
    }
}
