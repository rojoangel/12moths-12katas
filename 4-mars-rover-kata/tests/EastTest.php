<?php


namespace Kata;


class EastTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTurnLeftDirectionIsNorth()
    {
        $direction = new East();
        $newDirection = $direction->turnLeft();
        $this->assertInstanceOf('Kata\North', $newDirection);
    }

    public function testWhenTurnRightDirectionIsSouth()
    {
        $direction = new East();
        $newDirection = $direction->turnRight();
        $this->assertInstanceOf('Kata\South', $newDirection);
    }
}
