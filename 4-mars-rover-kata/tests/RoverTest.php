<?php


namespace Kata;


class RoverTest extends \PHPUnit_Framework_TestCase
{

    public function testRoverFacedNorthWhenTurnsLeftFacesWest()
    {
        $rover = new Rover(new North());
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\West', $rover->getDirection());
    }

    public function testRoverFacedNorthWhenTurnsRightFacesEast()
    {
        $rover = new Rover(new North());
        $rover->turnRight();
        $this->assertInstanceOf('Kata\East', $rover->getDirection());
    }

    public function testRoverFacedSouthWhenTurnsLeftFacesEast()
    {
        $rover = new Rover(new South());
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\East', $rover->getDirection());
    }

    public function testRoverFacedSouthWhenTurnsRightFacesWest()
    {
        $rover = new Rover(new South());
        $rover->turnRight();
        $this->assertInstanceOf('Kata\West', $rover->getDirection());
    }

    public function testRoverFacedEastWhenTurnsLeftFacesNorth()
    {
        $rover = new Rover(new East());
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\North', $rover->getDirection());
    }

    public function testRoverFacedEastWhenTurnsRightFacesSouth()
    {
        $rover = new Rover(new East());
        $rover->turnRight();
        $this->assertInstanceOf('Kata\South', $rover->getDirection());
    }

    public function testRoverFacedWestWhenTurnsLeftFacesSouth()
    {
        $rover = new Rover(new West());
        $rover->turnLeft();
        $this->assertInstanceOf('Kata\South', $rover->getDirection());
    }

    public function testRoverFacedWestWhenTurnsRightFacesNorth()
    {
        $rover = new Rover(new West());
        $rover->turnRight();
        $this->assertInstanceOf('Kata\North', $rover->getDirection());
    }
}
