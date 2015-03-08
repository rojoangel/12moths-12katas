<?php


namespace Kata;


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

        if ($rover->getPosition()->getYCoordinate() >= $this->ySize) {
            $rover->setPosition(
                new Position(
                    $rover->getPosition()->getXCoordinate(),
                    0
                )
            );
        }
    }

    public function moveYBackward(Rover $rover)
    {
        parent::moveYBackward($rover);

        if ($rover->getPosition()->getYCoordinate() < 0) {
            $rover->setPosition(
                new Position(
                    $rover->getPosition()->getXCoordinate(),
                    $this->ySize - 1
                )
            );
        }
    }

    public function moveXForward(Rover $rover)
    {
        parent::moveXForward($rover);

        if ($rover->getPosition()->getXCoordinate() >= $this->xSize) {
            $rover->setPosition(
                new Position(
                    0,
                    $rover->getPosition()->getYCoordinate()
                )
            );
        }
    }

    public function moveXBackward(Rover $rover)
    {
        parent::moveXBackward($rover);

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
