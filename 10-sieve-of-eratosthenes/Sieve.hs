module Sieve where

primes :: Int -> [Int]
primes x
  | x < 2     = []
  | otherwise = sieve [2..x]
  where sieve []     = []
        sieve (y:ys) = y : sieve [y' | y' <- ys, y' `mod` y /= 0]
