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
        $this->setPosition(
            new Position(
                $this->getPosition()->getXCoordinate(),
                $this->getPosition()->getYCoordinate() + 1
            )
        );
    }

    public function moveYBackward()
    {
        $this->setPosition(
            new Position(
                $this->getPosition()->getXCoordinate(),
                $this->getPosition()->getYCoordinate() - 1
            )
        );
    }

    public function moveXForward()
    {
        $this->setPosition(
            new Position(
                $this->getPosition()->getXCoordinate() + 1,
                $this->getPosition()->getYCoordinate()
            )
        );
    }

    public function moveXBackward()
    {
        $this->setPosition(
            new Position(
                $this->getPosition()->getXCoordinate() - 1,
                $this->getPosition()->getYCoordinate()
            )
        );
    }
}
