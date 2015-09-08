module Sieve where

primes :: [Int] -> [Int]
primes []     = []
primes (x:xs)
  | x < 2     = primes xs
  | otherwise = x : primes [x' | x' <- xs, x' `mod` x /= 0]
