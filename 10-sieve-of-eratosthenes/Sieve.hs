module Sieve where

primes :: [Int] -> [Int]
primes = sieve
  where sieve [1]     = []
        sieve (x:xs)  = x : [x' | x' <- xs, x' `mod` x /= 0]
