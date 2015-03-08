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
        parent::__construct();
        $this->xSize = $xSize;
        $this->ySize = $ySize;
    }

    public function moveYForward()
    {
        parent::moveYForward();

        if ($this->getPosition()->getYCoordinate() >= $this->ySize) {
            $this->setPosition(
                new Position(
                    $this->getPosition()->getXCoordinate(),
                    0
                )
            );
        }
    }

    public function moveYBackward()
    {
        parent::moveYBackward();

        if ($this->getPosition()->getYCoordinate() < 0) {
            $this->setPosition(
                new Position(
                    $this->getPosition()->getXCoordinate(),
                    $this->ySize - 1
                )
            );
        }
    }

    public function moveXForward()
    {
        parent::moveXForward();

        if ($this->getPosition()->getXCoordinate() >= $this->xSize) {
            $this->setPosition(
                new Position(
                    0,
                    $this->getPosition()->getYCoordinate()
                )
            );
        }
    }

    public function moveXBackward()
    {
        parent::moveXBackward();

        if ($this->getPosition()->getXCoordinate() < 0) {
            $this->setPosition(
                new Position(
                    $this->xSize - 1,
                    $this->getPosition()->getYCoordinate()
                )
            );
        }
    }
}
