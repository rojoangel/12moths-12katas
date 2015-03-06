<?php


namespace Kata;


class InfiniteGrid extends PositionableGrid
{

    /**
     * @param Position $position
     * @return Position
     */
    public function wrapEdge(Position $position)
    {
        return $position;
    }
}
