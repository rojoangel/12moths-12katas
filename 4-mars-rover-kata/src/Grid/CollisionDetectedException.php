<?php


namespace Kata\Grid;


use Kata\Position;

class CollisionDetectedException extends \Exception
{
    /** @var Position $position */
    private $position;

    /**
     * @param string $position
     */
    public function __construct($position)
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
