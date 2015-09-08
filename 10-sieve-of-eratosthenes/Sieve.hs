module Sieve where

primes :: Int -> [Int]
primes x
  | x < 2     = []
  | otherwise = sieve [2..x]

-- assumes sieve always receives a list starting with 2
sieve :: [Int] -> [Int]
sieve []     = []
sieve (x:xs) = x : sieve [x' | x' <- xs, x' `mod` x /= 0]
