<?php


namespace Kata\Grid;


use Kata\Position;

class RectangularGridTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \Kata\Grid\CollisionDetectedException
     */
    public function testObstacleDetectionWhenMovingXForward()
    {
        $grid = new RectangularGrid(2, 2);
        $grid->addObstacle(new Position(0, 0));

        // exception expected
        $grid->moveXForward(new Position(1, 0));
    }

    /**
     * @expectedException \Kata\Grid\CollisionDetectedException
     */
    public function testObstacleDetectionWhenMovingXBackward()
    {
        $grid = new RectangularGrid(2, 2);
        $grid->addObstacle(new Position(1, 0));

        // exception expected
        $grid->moveXBackward(new Position(0, 0));
    }

    /**
     * @expectedException \Kata\Grid\CollisionDetectedException
     */
    public function testObstacleDetectionWhenMovingYForward()
    {
        $grid = new RectangularGrid(2, 2);
        $grid->addObstacle(new Position(0, 0));

        // exception expected
        $grid->moveYForward(new Position(0, 1));
    }

    /**
     * @expectedException \Kata\Grid\CollisionDetectedException
     */
    public function testObstacleDetectionWhenMovingYBackward()
    {
        $grid = new RectangularGrid(2, 2);
        $grid->addObstacle(new Position(0, 1));

        // exception expected
        $grid->moveYBackward(new Position(0, 0));
    }
}
