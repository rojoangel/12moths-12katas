<?php


namespace Kata;


interface Grid
{
    /**
     * @return Position
     */
    public function getPosition();

    /**
     * @param Position $position
     * @return Position
     */
    public function wrapEdge(Position $position);

}
