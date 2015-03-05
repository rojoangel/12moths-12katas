<?php


namespace Kata;


class RoverTest extends \PHPUnit_Framework_TestCase
{

    public function testRoverFacedNorthWhenTurnsLeftFacesWest()
    {
        $rover = new Rover(new North(new Grid(new Position(0, 0), 1, 1)));
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\West', $rover->getDirection());
    }

    public function testRoverFacedNorthWhenTurnsRightFacesEast()
    {
        $rover = new Rover(new North(new Grid(new Position(0, 0), 1, 1)));
        $rover->turnRight();
        $this->assertInstanceOf('Kata\East', $rover->getDirection());
    }

    public function testRoverFacedSouthWhenTurnsLeftFacesEast()
    {
        $rover = new Rover(new South(new Grid(new Position(0, 0), 1, 1)));
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\East', $rover->getDirection());
    }

    public function testRoverFacedSouthWhenTurnsRightFacesWest()
    {
        $rover = new Rover(new South(new Grid(new Position(0, 0), 1, 1)));
        $rover->turnRight();
        $this->assertInstanceOf('Kata\West', $rover->getDirection());
    }

    public function testRoverFacedEastWhenTurnsLeftFacesNorth()
    {
        $rover = new Rover(new East(new Grid(new Position(0, 0), 1, 1)));
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\North', $rover->getDirection());
    }

    public function testRoverFacedEastWhenTurnsRightFacesSouth()
    {
        $rover = new Rover(new East(new Grid(new Position(0, 0), 1, 1)));
        $rover->turnRight();
        $this->assertInstanceOf('Kata\South', $rover->getDirection());
    }

    public function testRoverFacedWestWhenTurnsLeftFacesSouth()
    {
        $rover = new Rover(new West(new Grid(new Position(0, 0), 1, 1)));
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\South', $rover->getDirection());
    }

    public function testRoverFacedWestWhenTurnsRightFacesNorth()
    {
        $rover = new Rover(new West(new Grid(new Position(0, 0), 1, 1)));
        $rover->turnRight();
        $this->assertInstanceOf('Kata\North', $rover->getDirection());
    }

    public function testRoverAt00CoordinatesFacingNorthWhenMovesForwardWillBeAt01Coordinates()
    {
        $rover = new Rover(new North(new Grid(new Position(0, 0), 5, 5)));
        $rover->moveForward();
        $this->assertEquals(new Position(0, 1), $rover->getPosition());
    }
}
