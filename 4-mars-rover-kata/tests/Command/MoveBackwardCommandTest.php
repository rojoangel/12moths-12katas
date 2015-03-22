<?php


namespace Kata\Command;


use Kata\Direction\East;
use Kata\Direction\North;
use Kata\Grid\CollisionDetectedException;
use Kata\Grid\RectangularGrid;
use Kata\Position;
use Kata\Rover;

class MoveBackwardCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testRoverFacedNorthAtCoordinate01WhenExecuteEndsAt00Coordinate()
    {
        $rover = new Rover(new North(), new Position(0, 1), new RectangularGrid(2, 2));

        $command = new MoveBackwardCommand($rover);
        $command->execute();

        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }

    public function testRoverFacedEastAtCoordinate10WhenExecuteEndsAt00Coordinate()
    {
        $rover = new Rover(new East(), new Position(1, 0), new RectangularGrid(2, 2));

        $command = new MoveBackwardCommand($rover);
        $command->execute();

        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }

    public function testWhenExecuteDetectsCollisionAndRemainsAtInitialCoordinate()
    {
        $grid = new RectangularGrid(2, 2);
        $grid->addObstacle(new Position(0, 0));

        $rover = new Rover(new East(), new Position(1, 0), $grid);

        $command = new MoveBackwardCommand($rover);

        try {
            $command->execute();
        } catch (CollisionDetectedException $exception) {
            $this->assertEquals(new Position(0, 0), $exception->getPosition());
        }

        $this->assertEquals(new Position(1, 0), $rover->getPosition());
    }
}
