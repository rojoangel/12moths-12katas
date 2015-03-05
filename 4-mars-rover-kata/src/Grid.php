<?php


namespace Kata;


class Grid implements Landscape
{

    /** @var Position $position */
    private $position;

    /** @var integer $xGridSize */
    private $xGridSize;

    /** @var integer $yGridSize */
    private $yGridSize;

    /**
     * @param Position $initialPosition
     * @param integer $xGridSize
     * @param integer $yGridSize
     */
    public function __construct(Position $initialPosition, $xGridSize, $yGridSize)
    {
        $this->position = $initialPosition;
        $this->xGridSize = $xGridSize;
        $this->yGridSize = $yGridSize;
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function moveYForward()
    {
        $this->position = new Position(
            $this->position->getXCoordinate(),
            $this->position->getYCoordinate() + 1
        );
    }

}