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
     */
    public function setPosition($position);

    public function moveYForward();

    public function moveYBackward();

    public function moveXForward();

    public function moveXBackward();
}
