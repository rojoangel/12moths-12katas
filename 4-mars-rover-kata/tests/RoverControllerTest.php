<?php


namespace Kata;


use Kata\Direction\East;
use Kata\Direction\North;
use Kata\Direction\West;
use Kata\Grid\InfiniteGrid;

class RoverControllerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param string $instructions
     * @param Direction $expectedDirection
     * @param Position $expectedPosition
     * @dataProvider data
     */
    public function testMoveRover($instructions, $expectedDirection, $expectedPosition)
    {
        $rover = new Rover(new North(), new Position(0, 0), new InfiniteGrid());
        $roverController = new RoverController($rover, new CommandParser($rover));

        $roverController->moveRover($instructions);

        $this->assertEquals($expectedDirection, $rover->getDirection());
        $this->assertEquals($expectedPosition, $rover->getPosition());
    }

    /**
     * @return array
     */
    public function data()
    {
        return array(
            array(
                'RMLLM',
                new West(),
                new Position(0, 0)
            ),
            array(
                "RFLFFRF",
                new East(),
                new Position(2, 2)
            )
        );
    }
}
