<?php


namespace Kata\Command;


use Kata\Direction\East;
use Kata\Direction\North;
use Kata\Direction\South;
use Kata\Direction\West;
use Kata\Grid\RectangularGrid;
use Kata\Position;
use Kata\Rover;

class TurnLeftCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testRoverFacedNorthWhenExecutedFacesWest()
    {
        $rover = new Rover(new North(), new Position(0, 0), new RectangularGrid(2, 2));

        $command = new TurnLeftCommand($rover);
        $command->execute();

        $this->assertEquals(new West(), $rover->getDirection());
    }

    public function testRoverFacedSouthWhenExecutedFacesEast()
    {
        $rover = new Rover(new South(), new Position(0, 0), new RectangularGrid(2, 2));

        $command = new TurnLeftCommand($rover);
        $command->execute();

        $this->assertEquals(new East, $rover->getDirection());
    }
}
