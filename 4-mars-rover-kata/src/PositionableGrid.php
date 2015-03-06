<?php


namespace Kata;


abstract class PositionableGrid implements Grid
{
    /** @var Position $position */
    private $position;

    public function __construct()
    {
        $this->position = new Position(0, 0);
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param Position $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }


    public function moveYForward()
    {
        $this->position->moveYForward();
        $this->wrapEdge();
    }

    public function moveYBackward()
    {
        $this->position->moveYBackward();
        $this->wrapEdge();
    }

    public function moveXForward()
    {
        $this->position->moveXForward();
        $this->wrapEdge();
    }

    public function moveXBackward()
    {
        $this->position->moveXBackward();
        $this->wrapEdge();
    }

    abstract protected function wrapEdge();
}
