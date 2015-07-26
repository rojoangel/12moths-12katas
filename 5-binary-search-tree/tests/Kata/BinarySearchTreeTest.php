<?php


namespace Kata;

use InvalidArgumentException;
use PHPUnit_Framework_TestCase as TestCase;

class BinarySearchTreeTest extends TestCase
{
    /**
     * @param int[] $values
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage values cannot be empty
     * @dataProvider fromWithEmptyArgumentsDataProvider
     */
    public function testFromWithEmptyArguments($values)
    {
        BinarySearchTree::from($values);
    }

    /**
     * @return array
     */
    public function fromWithEmptyArgumentsDataProvider()
    {
        return [
            'empty values' => [
                []
            ],
            'one null value' => [
                [null]
            ],
            'multiple null values' => [
                [null, null, null, null]
            ]
        ];
    }

    /**
     * @param $values
     * @param $expectedSortedValues
     * @dataProvider providerForTestInOrder
     */
    public function testInOrder($values, $expectedSortedValues)
    {
        $tree = BinarySearchTree::from($values);
        $this->assertEquals($expectedSortedValues, $tree->inOrder());
    }

    /**
     * @return array
     */
    public function providerForTestInOrder()
    {
        return [
            'single positive value' => [
                [4],
                [4]],
            'single zero value' => [
                [0],
                [0]],
            'single negative value' => [
                [-1],
                [-1]],
            'left value #1' => [
                [4, 2],
                [2, 4]],
            'left value #2' => [
                [6, 5],
                [5, 6]],
            'left value #3' => [
                [2, 0],
                [0, 2]],
            'left value #4' => [
                [0, -1],
                [-1, 0]],
            'right value #1' => [
                [2, 4],
                [2, 4]],
            'right value #2' => [
                [5, 6],
                [5, 6]],
            'right value #3' => [
                [0, 2],
                [0, 2]],
            'right value #4' => [
                [-1, 0],
                [-1, 0]],
            'multiple values #1' => [
                [2, 1, 4],
                [1, 2, 4]],
            'multiple values #2' => [
                [1, 2, 4],
                [1, 2, 4]],
            'multiple values #3' => [
                [4, 2, 1],
                [1, 2, 4]],
            'multiple values #4' => [
                [4, 4, 1, null, 1, 2, 2],
                [1, 2, 4]],
            'multiple values #5' => [
                [6, 5, 4, 3, 2, 1],
                [1, 2, 3, 4, 5, 6]],
            'multiple values #6' => [
                [3, 2, 4, 6, 5, 1],
                [1, 2, 3, 4, 5, 6]]
        ];
    }

    /**
     * @param $values
     * @param $expectedSortedValues
     * @dataProvider providerForTestPreOrder
     */
    public function testPreOrder($values, $expectedSortedValues)
    {
        $tree = BinarySearchTree::from($values);
        $this->assertEquals($expectedSortedValues, $tree->preOrder());
    }

    /**
     * @return array
     */
    public function providerForTestPreOrder()
    {
        return [
            'left value #1' => [
                [4, 2],
                [4, 2]],
            'left value #2' => [
                [6, 5],
                [6, 5]],
            'left value #3' => [
                [2, 0],
                [2, 0]],
            'left value #4' => [
                [0, -1],
                [0, -1]],
            'right value #1' => [
                [2, 4],
                [2, 4]],
            'right value #2' => [
                [5, 6],
                [5, 6]],
            'right value #3' => [
                [0, 2],
                [0, 2]],
            'right value #4' => [
                [-1, 0],
                [-1, 0]],
            'multiple values #1' => [
                [2, 1, 4],
                [2, 1, 4]],
            'multiple values #2' => [
                [1, 2, 4],
                [1, 2, 4]],
            'multiple values #3' => [
                [4, 2, 1],
                [4, 2, 1]],
            'multiple values #4' => [
                [4, 4, 1, null, 1, 2, 2],
                [4, 1, 2]],
            'multiple values #5' => [
                [6, 5, 4, 3, 2, 1],
                [6, 5, 4, 3, 2, 1]],
            'multiple values #6' => [
                [3, 2, 4, 6, 5, 1],
                [3, 2, 1, 4, 6, 5]]
        ];
    }
}
