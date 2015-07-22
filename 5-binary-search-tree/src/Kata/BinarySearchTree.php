<?php


namespace Kata;


class BinarySearchTree
{

    /** @var int $value */
    private $value;


    /** @var BinarySearchTree $left */
    private $left;

    /**
     * @return BinarySearchTree
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @param int $value
     */
    public function __construct($value)
    {
        if ($value === null) {
            throw new \InvalidArgumentException('value cannot be null');
        }
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function add($value)
    {
        $this->left = new BinarySearchTree($value);
    }
}
