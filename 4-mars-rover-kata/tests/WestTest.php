<?php


namespace Kata;


class WestTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenTurnLeftDirectionIsSouth()
    {
        $direction = new West();
        $newDirection = $direction->turnLeft();
        $this->assertInstanceOf('Kata\South', $newDirection);
    }

    public function testWhenTurnRightDirectionIsNorth()
    {
        $direction = new West();
        $newDirection = $direction->turnRight();
        $this->assertInstanceOf('Kata\North', $newDirection);
    }
}
