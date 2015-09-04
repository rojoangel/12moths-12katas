module BinarySearchTree where

data BinarySearchTree a = EmptyTree | Node a (BinarySearchTree a) (BinarySearchTree a) deriving (Show, Eq)

treeInsert :: (Ord a) => a -> BinarySearchTree a -> BinarySearchTree a
treeInsert x EmptyTree = Node x EmptyTree EmptyTree
treeInsert x (Node a left right)
  | x == a  = Node x left right
  | x < a   = Node a (treeInsert x left) right
  | x > a   = Node a left (treeInsert x right)

fromList :: (Ord a) => [a] -> BinarySearchTree a
fromList = foldr treeInsert EmptyTree

inOrder :: (Ord a) => BinarySearchTree a -> [a]
inOrder EmptyTree = []
