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
}
