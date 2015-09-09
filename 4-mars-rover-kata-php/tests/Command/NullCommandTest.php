<?php


namespace Kata\Command;


use Kata\Direction\North;
use Kata\Grid\RectangularGrid;
use Kata\Position;
use Kata\Rover;

class NullCommandTest extends \PHPUnit_Framework_TestCase
{

    public function testExecuteDoesNothing()
    {
        $rover = new Rover(new North(), new Position(0, 0), new RectangularGrid(2, 2));
        $command = new NullCommand($rover);

        $command->execute();

        $this->assertEquals(new North(), $rover->getDirection());
        $this->assertEquals(new Position(0, 0), $rover->getPosition());
    }
}
