<?php


namespace Kata;


interface Grid
{

    public function moveYForward(Rover $rover);

    public function moveYBackward(Rover $rover);

    public function moveXForward(Rover $rover);

    public function moveXBackward(Rover $rover);
}
