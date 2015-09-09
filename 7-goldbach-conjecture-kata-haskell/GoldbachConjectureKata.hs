module GoldbachConjectureKata 
(partition_of, is_prime) where

is_prime :: Int -> Bool
is_prime 1 = False
is_prime n = [] == [x | x<- [2..(n-1)], (mod n x) == 0]

partition_of :: Int -> [(Int,Int)]
partition_of n 
	| odd n = []
	| otherwise = [(x, n-x) | x <- [2.. (div n 2)], is_prime x && is_prime (n - x)]
