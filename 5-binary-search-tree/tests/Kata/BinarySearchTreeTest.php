<?php


namespace Kata;

use PHPUnit_Framework_TestCase as TestCase;

class BinarySearchTreeTest extends TestCase
{
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
}
