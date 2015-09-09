<?php


namespace Kata\Grid;


use Kata\Obstacle;

class CollisionDetectedException extends \Exception
{
    /** @var Obstacle $obstacle */
    private $obstacle;

    /**
     * @param Obstacle $obstacle
     */
    public function __construct(Obstacle $obstacle)
    {
        $this->obstacle = $obstacle;
    }

    /**
     * @return Obstacle
     */
    public function getObstacle()
    {
        return $this->obstacle;
    }
}
