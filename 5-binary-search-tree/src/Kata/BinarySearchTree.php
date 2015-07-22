<?php


namespace Kata;


class BinarySearchTree
{

    /** @var int $value */
    private $value;

    /** @var BinarySearchTree $left */
    private $left;

    /** @var BinarySearchTree $right */
    private $right;

    /**
     * @return BinarySearchTree
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @return BinarySearchTree
     */
    public function getRight()
    {
        return $this->right;
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
        if ($value < $this->value) {
            $this->left = new BinarySearchTree($value);
        }

        if ($value > $this->value) {
            $this->right = new BinarySearchTree($value);
        }
    }
}
