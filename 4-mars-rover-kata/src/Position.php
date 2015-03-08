<?php


namespace Kata;

class Position
{

    /** @var integer $xCoordinate */
    private $xCoordinate;

    /** @var integer $yCoordinate */
    private $yCoordinate;

    /**
     * @param integer $xCoordinate
     * @param integer $yCoordinate
     */
    public function __construct($xCoordinate, $yCoordinate)
    {
        $this->xCoordinate = $xCoordinate;
        $this->yCoordinate = $yCoordinate;
    }

    /**
     * @return int
     */
    public function getXCoordinate()
    {
        return $this->xCoordinate;
    }

    /**
     * @return int
     */
    public function getYCoordinate()
    {
        return $this->yCoordinate;
    }
}
