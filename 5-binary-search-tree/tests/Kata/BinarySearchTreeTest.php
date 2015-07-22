<?php


namespace Kata;

use InvalidArgumentException;
use PHPUnit_Framework_TestCase as TestCase;

class BinarySearchTreeTest extends TestCase
{

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage value cannot be null
     */
    public function testNullValue()
    {
        new BinarySearchTree(null);
    }

    /**
     * @param int $value
     * @dataProvider singleValueProvider
     */
    public function testSingleValue($value)
    {
        $tree = new BinarySearchTree($value);
        $this->assertEquals($value, $tree->getValue());
    }

    /**
     * @return array
     */
    public function singleValueProvider()
    {
        return [
            'positive' => [4],
            'zero' => [0],
            'negative' => [-1]
        ];
    }

    public function testLeftValue()
    {
        $tree = new BinarySearchTree(4);
        $tree->add(2);

        $this->assertEquals(4, $tree->getValue());
        $this->assertEquals(2, $tree->getLeft()->getValue());
    }
}
