<?php


namespace Kata;

use PHPUnit_Framework_TestCase as TestCase;

class BinarySearchTreeTest extends TestCase
{
    public function testSingleValue()
    {
        $tree = new BinarySearchTree(4);
        $this->assertEquals(4, $tree->getValue());
    }
}
