module BinarySearchTree where

data BinarySearchTree a = EmptyTree | Node a (BinarySearchTree a) (BinarySearchTree a) deriving (Show, Eq)

treeInsert :: (Ord a) => a -> BinarySearchTree a -> BinarySearchTree a
treeInsert x EmptyTree = Node x EmptyTree EmptyTree
