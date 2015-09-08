module Sieve where

primes :: [Int] -> [Int]
primes = sieve
  where sieve []      = []
        sieve (x:xs)
          | x < 2     = sieve xs
          | otherwise = x : sieve [x' | x' <- xs, x' `mod` x /= 0]
