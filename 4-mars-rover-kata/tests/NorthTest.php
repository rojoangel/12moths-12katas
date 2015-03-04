<?php

namespace Kata;

class NorthTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTurnLeftDirectionIsWest()
    {
        $direction = new North();
        $newDirection = $direction->turnLeft();
        $this->assertInstanceOf('Kata\West', $newDirection);
    }

    public function testWhenTurnRightDirectionIsEast()
    {
        $direction = new North();
        $newDirection = $direction->turnRight();
        $this->assertInstanceOf('Kata\East', $newDirection);
    }
}
