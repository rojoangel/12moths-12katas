<?php


namespace Kata;


interface Grid
{
    /**
     * @return Position
     */
    public function getPosition();

    public function moveYForward();

    public function moveYBackward();

    public function moveXForward();

    public function moveXBackward();
}
