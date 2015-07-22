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

    /**
     * @param int $rootValue
     * @param int $leftValue
     * @dataProvider leftValueDataProvider
     */
    public function testLeftValue($rootValue, $leftValue)
    {
        $tree = new BinarySearchTree($rootValue);
        $tree->add($leftValue);

        $this->assertEquals($rootValue, $tree->getValue());
        $this->assertEquals($leftValue, $tree->getLeft()->getValue());
    }

    /**
     * @return array
     */
    public function leftValueDataProvider()
    {
        return [
            [4, 2],
            [6, 5],
            [2, 0],
            [0, -1]
        ];
    }

    /**
     * @param int $rootValue
     * @param int $rightValue
     * @dataProvider rightValueDataProvider
     */
    public function testRightValue($rootValue, $rightValue)
    {
        $tree = new BinarySearchTree($rootValue);
        $tree->add($rightValue);

        $this->assertEquals($rootValue, $tree->getValue());
        $this->assertEquals($rightValue, $tree->getRight()->getValue());
    }

    /**
     * @return array
     */
    public function rightValueDataProvider()
    {
        return [
            [2, 4],
            [5, 6],
            [0, 2],
            [-1, 0]
        ];
    }
}
