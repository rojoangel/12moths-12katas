<?php


namespace Kata;


class North implements Direction
{

    /** @var Landscape $landscape */
    private $landscape;

    /**
     * @param Landscape $landscape
     */
    public function __construct(Landscape $landscape)
    {
        $this->landscape = $landscape;
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->landscape->getPosition();
    }

    public function turnLeft()
    {
        return new West($this->landscape);
    }


    public function turnRight()
    {
        return new East($this->landscape);
    }

    /**
     * @return Direction
     */
    public function moveForward()
    {
        $this->landscape->moveYForward();
        return $this;
    }
}
