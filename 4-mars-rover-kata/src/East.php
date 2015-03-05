<?php


namespace Kata;


class East implements Direction
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
        return new North($this->landscape);
    }

    public function turnRight()
    {
        return new South($this->landscape);
    }

    /**
     * @return Direction
     */
    public function moveForward()
    {
        // TODO: Implement moveForward() method.
    }
}
