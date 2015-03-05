<?php


namespace Kata;


class WestTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTurnLeftDirectionIsSouth()
    {
        $direction = new West(new Grid(new Position(0, 0), 1, 1));
        $newDirection = $direction->turnLeft();
        $this->assertInstanceOf('Kata\South', $newDirection);
    }

    public function testWhenTurnRightDirectionIsNorth()
    {
        $direction = new West(new Grid(new Position(0, 0), 1, 1));
        $newDirection = $direction->turnRight();
        $this->assertInstanceOf('Kata\North', $newDirection);
    }
}
