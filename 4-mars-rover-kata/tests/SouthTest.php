<?php


namespace Kata;


class SouthTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTurnLeftDirectionIsEast()
    {
        $direction = new South();
        $newDirection = $direction->turnLeft();
        $this->assertInstanceOf('Kata\East', $newDirection);
    }

    public function testWhenTurnRightDirectionIsEast()
    {
        $direction = new South();
        $newDirection = $direction->turnRight();
        $this->assertInstanceOf('Kata\West', $newDirection);
    }
}
