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

    protected function wrapEdge()
    {
        if ($this->getPosition()->getXCoordinate() < 0) {
            $this->setPosition(
                new Position(
                    $this->xSize - 1,
                    $this->getPosition()->getYCoordinate()
                )
            );
        }

        if ($this->getPosition()->getXCoordinate() >= $this->xSize) {
            $this->getPosition()->resetXCoordinate();
        }

        if ($this->getPosition()->getYCoordinate() < 0) {
            $this->setPosition(
                new Position(
                    $this->getPosition()->getXCoordinate(),
                    $this->ySize - 1
                )
            );
        }

        if ($this->getPosition()->getYCoordinate() >= $this->ySize) {
            $this->getPosition()->resetYCoordinate();
        }

    }

}