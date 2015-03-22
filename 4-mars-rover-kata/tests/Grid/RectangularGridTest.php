<?php


namespace Kata\Grid;


use Kata\Position;

class RectangularGridTest extends \PHPUnit_Framework_TestCase
{

    public function testObstacleDetectionWhenMovingXForward()
    {
        $grid = new RectangularGrid(2, 2);
        $grid->addObstacle(new Position(0, 0));

        $this->assertEquals(new Position(1, 0), $grid->moveXForward(new Position(1, 0)));
    }

    public function testObstacleDetectionWhenMovingXBackward()
    {
        $grid = new RectangularGrid(2, 2);
        $grid->addObstacle(new Position(1, 0));

        $this->assertEquals(new Position(0, 0), $grid->moveXBackward(new Position(0, 0)));
    }

    public function testObstacleDetectionWhenMovingYForward()
    {
        $grid = new RectangularGrid(2, 2);
        $grid->addObstacle(new Position(0, 0));

        $this->assertEquals(new Position(0, 1), $grid->moveYForward(new Position(0, 1)));
    }

    public function testObstacleDetectionWhenMovingYBackward()
    {
        $grid = new RectangularGrid(2, 2);
        $grid->addObstacle(new Position(0, 1));

        $this->assertEquals(new Position(0, 0), $grid->moveYBackward(new Position(0, 0)));
    }
}
