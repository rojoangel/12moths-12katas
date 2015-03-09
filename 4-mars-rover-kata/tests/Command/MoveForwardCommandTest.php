<?php


namespace Kata\Command;


use Kata\Direction\East;
use Kata\Direction\North;
use Kata\Grid\RectangularGrid;
use Kata\Position;
use Kata\Rover;

class MoveForwardCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testRoverFacedNorthAtCoordinate00WhenExecuteEndsAt01Coordinate()
    {
        $rover = new Rover(new North(), new Position(0, 0), new RectangularGrid(2, 2));

        $command = new MoveForwardCommand($rover);
        $command->execute();

        $this->assertEquals(new Position(0, 1), $rover->getPosition());
    }

    public function testRoverFacedEastAtCoordinate00WhenExecuteEndsAt10Coordinate()
    {
        $rover = new Rover(new East(), new Position(0, 0), new RectangularGrid(2, 2));

        $command = new MoveForwardCommand($rover);
        $command->execute();

        $this->assertEquals(new Position(1, 0), $rover->getPosition());
    }
}
