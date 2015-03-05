<?php


namespace Kata;


interface Landscape
{

    /**
     * @return Position
     */
    public function getPosition();

    public function moveYForward();

}
