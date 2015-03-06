<?php


namespace Kata;


class RectangularGridTest extends \PHPUnit_Framework_TestCase {

    public function testInitialPositionIs00()
    {
        $grid = new RectangularGrid(100, 100);
        $this->assertEquals(new Position(0, 0), $grid->getPosition());
    }
}
