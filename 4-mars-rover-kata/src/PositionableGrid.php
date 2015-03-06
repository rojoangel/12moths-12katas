<?php


namespace Kata;


abstract class PositionableGrid implements Grid
{
    /** @var Position $position */
    private $position;

    /**
     * @param Position $position
     */
    public function __construct(Position $position)
    {
        $this->position = $position;
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
