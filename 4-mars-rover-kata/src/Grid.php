<?php


namespace Kata;


use Kata\Grid\CollisionDetectedException;

interface Grid
{

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveYForward(Position $position);

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveYBackward(Position $position);

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveXForward(Position $position);

    /**
     * @param Position $position
     * @return Position
     * @throws CollisionDetectedException
     */
    public function moveXBackward(Position $position);

    /**
     * @param Position $obstacle
     */
    public function addObstacle(Position $obstacle);
}
