<?php


namespace Kata;

use Kata\Direction\East;
use Kata\Direction\North;
use Kata\Direction\South;
use Kata\Direction\West;
use Kata\Grid\RectangularGrid;

class RoverEdgeWrappingTest extends \PHPUnit_Framework_TestCase {

    public function testNorthEdgeIsWrappedInARectangularGridWhenMovingForward()
    {
        $grid = new RectangularGrid(2, 2);
        $rover = new Rover(new North(), new Position(0, 1), $grid);

        $rover->moveForward();

        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }

    public function testNorthEdgeIsWrappedInARectangularGridWhenMovingBackward()
    {
        $grid = new RectangularGrid(2, 2);
        $rover = new Rover(new South(), new Position(0, 1), $grid);

        $rover->moveBackward();

        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }

    public function testSouthEdgeIsWrappedInARectangularGridWhenMovingForward()
    {
        $grid = new RectangularGrid(2, 2);
        $rover = new Rover(new South(), new Position(0, 0), $grid);

        $rover->moveForward();

        $this->assertEquals(new Position(0, 1), $rover->getPosition());
    }

    public function testSouthEdgeIsWrappedInARectangularGridWhenMovingBackward()
    {
        $grid = new RectangularGrid(2, 2);
        $rover = new Rover(new North(), new Position(0, 0), $grid);

        $rover->moveBackward();

        $this->assertEquals(new Position(0, 1), $rover->getPosition());
    }

    public function testEastEdgeIsWrappedInARectangularGridWhenMovingForward()
    {
        $grid = new RectangularGrid(2, 2);
        $rover = new Rover(new East(), new Position(1, 0), $grid);

        $rover->moveForward();

        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }

    public function testEastEdgeIsWrappedInARectangularGridWhenMovingBackward()
    {
        $grid = new RectangularGrid(2, 2);
        $rover = new Rover(new West(), new Position(1, 0), $grid);

        $rover->moveBackward();

        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }

    public function testWestEdgeIsWrappedInARectangularGridWhenMovingForward()
    {
        $grid = new RectangularGrid(2, 2);
        $rover = new Rover(new West(), new Position(0, 0), $grid);

        $rover->moveForward();

        $this->assertEquals(new Position(1, 0), $rover->getPosition());
    }

    public function testWestEdgeIsWrappedInARectangularGridWhenMovingBackward()
    {
        $grid = new RectangularGrid(2, 2);
        $rover = new Rover(new East(), new Position(0, 0), $grid);

        $rover->moveBackward();

        $this->assertEquals(new Position(1, 0), $rover->getPosition());
    }
}
