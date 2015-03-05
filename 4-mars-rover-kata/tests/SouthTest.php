<?php


namespace Kata;


class SouthTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTurnLeftDirectionIsEast()
    {
        $direction = new South(new Grid(new Position(0, 0), 1, 1));
        $newDirection = $direction->turnLeft();
        $this->assertInstanceOf('Kata\East', $newDirection);
    }

    public function testWhenTurnRightDirectionIsEast()
    {
        $direction = new South(new Grid(new Position(0, 0), 1, 1));
        $newDirection = $direction->turnRight();
        $this->assertInstanceOf('Kata\West', $newDirection);
    }
}
