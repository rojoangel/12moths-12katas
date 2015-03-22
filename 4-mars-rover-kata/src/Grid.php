<?php


namespace Kata;


interface Grid
{

    /**
     * @param Position $position
     * @return Position
     */
    public function moveYForward(Position $position);

    /**
     * @param Position $position
     * @return Position
     */
    public function moveYBackward(Position $position);

    /**
     * @param Position $position
     * @return Position
     */
    public function moveXForward(Position $position);

    /**
     * @param Position $position
     * @return Position
     */
    public function moveXBackward(Position $position);

    /**
     * @param Position $obstacle
     */
    public function addObstacle(Position $obstacle);
}
