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
    public function testMoveRover(
        $instructions,
        Direction $expectedDirection,
        Position $expectedPosition
    ) {
        $rover = new Rover(new North(), new Position(0, 0), new InfiniteGrid());
        $roverController = new RoverController($rover, new CommandParser($rover));

        $roverController->moveRover($instructions);

        $this->assertEquals($expectedDirection, $rover->getDirection());
        $this->assertEquals($expectedPosition, $rover->getPosition());
        $this->assertNull($roverController->reportObstacle());
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
                'RFLFFRF',
                new East(),
                new Position(2, 2)
            ),
            array(
                '',
                new North(),
                new Position(0, 0)
            ),
            array(
                null,
                new North(),
                new Position(0, 0)
            )
        );
    }

    /**
     * @param string $instructions
     * @param Direction $expectedDirection
     * @param Position $expectedPosition
     * @param Obstacle $expectedObstacle
     * @dataProvider dataWithObstacles
     */
    public function testMoveRoverWithObstacles(
        $instructions,
        Direction $expectedDirection,
        Position $expectedPosition,
        Obstacle $expectedObstacle
    ) {
        $grid = new InfiniteGrid();
        $grid->addObstacle($expectedObstacle);
        $rover = new Rover(new North(), new Position(0, 0), $grid);
        $roverController = new RoverController($rover, new CommandParser($rover));

        $roverController->moveRover($instructions);

        $this->assertEquals($expectedDirection, $rover->getDirection());
        $this->assertEquals($expectedPosition, $rover->getPosition());
        $this->assertEquals($expectedObstacle, $roverController->reportObstacle());
    }

    /**
     * @return array
     */
    public function dataWithObstacles()
    {
        return array(
            array(
                'RMLLMB',
                new West(),
                new Position(0, 0),
                new Obstacle(new Position(1, 0))
            ),
            array(
                'RFLFFRF',
                new North(),
                new Position(1, 0),
                new Obstacle(new Position(1, 1))
            ),
            array(
                'RFLFFRF',
                new North(),
                new Position(1, 1),
                new Obstacle(new Position(1, 2))
            ),
            array(
                'RFLFFRF',
                new East(),
                new Position(1, 2),
                new Obstacle(new Position(2, 2))
            )
        );
    }
}
