<?php


namespace Kata\Command;


use Kata\Direction\East;
use Kata\Direction\North;
use Kata\Direction\South;
use Kata\Direction\West;
use Kata\Grid\RectangularGrid;
use Kata\Position;
use Kata\Rover;

class TurnRightCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testRoverFacedNorthWhenExecutedFacesEast()
    {
        $rover = new Rover(new North(), new Position(0, 0), new RectangularGrid(2, 2));

        $command = new TurnRightCommand($rover);
        $command->execute();

        $this->assertEquals(new East(), $rover->getDirection());
    }

    public function testRoverFacedSouthWhenExecutedFacesWest()
    {
        $rover = new Rover(new South(), new Position(0, 0), new RectangularGrid(2, 2));

        $command = new TurnRightCommand($rover);
        $command->execute();

        $this->assertEquals(new West, $rover->getDirection());
    }
}
