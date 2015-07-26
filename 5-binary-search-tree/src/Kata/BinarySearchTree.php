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
     * @param array $values
     * @return BinarySearchTree
     */
    public static function from($values)
    {
        $values = array_filter(
            $values,
            function ($val) {
                return !is_null($val);
            }
        );

        if (empty($values)) {
            throw new \InvalidArgumentException('values cannot be empty');
        }

        $tree = new BinarySearchTree(array_shift($values));
        foreach ($values as $value) {
            $tree->add($value);
        }

        return $tree;
    }

    /**
     * @param int $value
     */
    private function __construct($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('value cannot be null');
        }
        $this->value = $value;
    }

    /**
     * @param int $value
     */
    public function add($value)
    {
        if ($value < $this->value) {
            if (empty($this->left)) {
                $this->left = new BinarySearchTree($value);
            } else {
                $this->left->add($value);
            }
        }

        if ($value > $this->value) {
            if (empty($this->right)) {
                $this->right = new BinarySearchTree($value);
            } else {
                $this->right->add($value);
            }
        }
    }

    /**
     * @return array
     */
    public function inOrder()
    {
        $sorted = [];
        if (!empty($this->left)) {
            $sorted = array_merge($sorted, $this->left->inOrder());
        }

        $sorted[] = $this->value;

        if (!empty($this->right)) {
            $sorted = array_merge($sorted, $this->right->inOrder());
        }
        return $sorted;
    }

    public function preOrder()
    {
        $sorted[] = $this->value;

        if (!empty($this->left)) {
            $sorted = array_merge($sorted, $this->left->preOrder());
        }

        if (!empty($this->right)) {
            $sorted = array_merge($sorted, $this->right->preOrder());
        }
        return $sorted;

    }
}
