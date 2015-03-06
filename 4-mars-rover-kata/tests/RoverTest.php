<?php


namespace Kata;


class RoverTest extends \PHPUnit_Framework_TestCase
{

    public function testRoverFacedNorthWhenTurnsLeftFacesWest()
    {
        $rover = new Rover(new North(), new InfiniteGrid(new Position(0, 0)));
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\West', $rover->getDirection());
    }

    public function testRoverFacedNorthWhenTurnsRightFacesEast()
    {
        $rover = new Rover(new North(), new InfiniteGrid(new Position(0, 0)));
        $rover->turnRight();
        $this->assertInstanceOf('Kata\East', $rover->getDirection());
    }

    public function testRoverFacedSouthWhenTurnsLeftFacesEast()
    {
        $rover = new Rover(new South(), new InfiniteGrid(new Position(0, 0)));
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\East', $rover->getDirection());
    }

    public function testRoverFacedSouthWhenTurnsRightFacesWest()
    {
        $rover = new Rover(new South(), new InfiniteGrid(new Position(0, 0)));
        $rover->turnRight();
        $this->assertInstanceOf('Kata\West', $rover->getDirection());
    }

    public function testRoverFacedEastWhenTurnsLeftFacesNorth()
    {
        $rover = new Rover(new East(), new InfiniteGrid(new Position(0, 0)));
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\North', $rover->getDirection());
    }

    public function testRoverFacedEastWhenTurnsRightFacesSouth()
    {
        $rover = new Rover(new East(), new InfiniteGrid(new Position(0, 0)));
        $rover->turnRight();
        $this->assertInstanceOf('Kata\South', $rover->getDirection());
    }

    public function testRoverFacedWestWhenTurnsLeftFacesSouth()
    {
        $rover = new Rover(new West(), new InfiniteGrid(new Position(0, 0)));
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\South', $rover->getDirection());
    }

    public function testRoverFacedWestWhenTurnsRightFacesNorth()
    {
        $rover = new Rover(new West(), new InfiniteGrid(new Position(0, 0)));
        $rover->turnRight();
        $this->assertInstanceOf('Kata\North', $rover->getDirection());
    }

    public function testRoverFacedNorthAt00CoordinateWhenMovesForwardEndsAt01Coordinate()
    {
        $rover = new Rover(new North(), new InfiniteGrid(new Position(0, 0)));
        $rover->moveForward();
        $this->assertEquals(new Position(0, 1), $rover->getPosition());
    }

    public function testRoverFacedSouthAt01CoordinateWhenMovesForwardEndsAt00Coordinate()
    {
        $rover = new Rover(new South(), new InfiniteGrid(new Position(0, 1)));
        $rover->moveForward();
        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }

    public function testRoverFacedEastAt00CoordinateWhenMovesForwardEndsAt10Coordinate()
    {
        $rover = new Rover(new East(), new InfiniteGrid(new Position(0, 0)));
        $rover->moveForward();
        $this->assertEquals(new Position(1, 0), $rover->getPosition());
    }

    public function testRoverFacedWestAt10CoordinateWhenMovesForwardEndsAt00Coordinate()
    {
        $rover = new Rover(new West(), new InfiniteGrid(new Position(1, 0)));
        $rover->moveForward();
        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }

    public function testRoverFacedNorthAt01CoordinateWhenMovesBackwardEndsAt00Coordinate()
    {
        $rover = new Rover(new North(), new InfiniteGrid(new Position(0, 1)));
        $rover->moveBackward();
        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }

    public function testRoverFacedSouthAt00CoordinateWhenMovesBackwardEndsAt01Coordinate()
    {
        $rover = new Rover(new South(), new InfiniteGrid(new Position(0, 0)));
        $rover->moveBackward();
        $this->assertEquals(new Position(0, 1), $rover->getPosition());
    }

    public function testRoverFacedEastAt10CoordinateWhenMovesBackwardEndsAt00Coordinate()
    {
        $rover = new Rover(new East(), new InfiniteGrid(new Position(1, 0)));
        $rover->moveBackward();
        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }
    public function testRoverFacedWestAt00CoordinateWhenMovesBackwardEndsAt10Coordinate()
    {
        $rover = new Rover(new West(), new InfiniteGrid(new Position(0, 0)));
        $rover->moveBackward();
        $this->assertEquals(new Position(1, 0), $rover->getPosition());
    }
}
