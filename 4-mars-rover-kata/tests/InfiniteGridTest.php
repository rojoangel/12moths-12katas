<?php


namespace Kata;


class InfiniteGridTest extends \PHPUnit_Framework_TestCase {

    public function testInitialPositionIs00()
    {
        $grid = new InfiniteGrid();
        $this->assertEquals(new Position(0, 0), $grid->getPosition());
    }

}
