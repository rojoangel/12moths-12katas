<?php


namespace Kata\Grid;


use Kata\Position;

class InfiniteGridTest extends \PHPUnit_Framework_TestCase
{

    public function testObstacleDetectionWhenMovingXForward()
    {
        $grid = new InfiniteGrid();
        $grid->addObstacle(new Position(1, 0));

        $this->assertEquals(new Position(0, 0), $grid->moveXForward(new Position(0, 0)));
    }

    public function testObstacleDetectionWhenMovingXBackward()
    {
        $grid = new InfiniteGrid();
        $grid->addObstacle(new Position(0, 0));

        $this->assertEquals(new Position(1, 0), $grid->moveXBackward(new Position(1, 0)));
    }

    public function testObstacleDetectionWhenMovingYForward()
    {
        $grid = new InfiniteGrid();
        $grid->addObstacle(new Position(0, 1));

        $this->assertEquals(new Position(0, 0), $grid->moveYForward(new Position(0, 0)));
    }

    public function testObstacleDetectionWhenMovingYBackward()
    {
        $grid = new InfiniteGrid();
        $grid->addObstacle(new Position(0, 0));

        $this->assertEquals(new Position(0, 1), $grid->moveYBackward(new Position(0, 1)));
    }
}
