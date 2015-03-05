<?php


namespace Kata;


class EastTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTurnLeftDirectionIsNorth()
    {
        $direction = new East(new Grid(new Position(0, 0), 1, 1));
        $newDirection = $direction->turnLeft();
        $this->assertInstanceOf('Kata\North', $newDirection);
    }

    public function testWhenTurnRightDirectionIsSouth()
    {
        $direction = new East(new Grid(new Position(0, 0), 1, 1));
        $newDirection = $direction->turnRight();
        $this->assertInstanceOf('Kata\South', $newDirection);
    }
}
