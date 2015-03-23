<?php


namespace Kata;


class Obstacle
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
