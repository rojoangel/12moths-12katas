<?php

namespace Kata;

class NorthTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTurnLeftDirectionIsWest()
    {
        $direction = new North(new Grid(new Position(0, 0), 1, 1));
        $newDirection = $direction->turnLeft();
        $this->assertInstanceOf('Kata\West', $newDirection);
    }

    public function testWhenTurnRightDirectionIsEast()
    {
        $direction = new North(new Grid(new Position(0, 0), 1, 1));
        $newDirection = $direction->turnRight();
        $this->assertInstanceOf('Kata\East', $newDirection);
    }
}
