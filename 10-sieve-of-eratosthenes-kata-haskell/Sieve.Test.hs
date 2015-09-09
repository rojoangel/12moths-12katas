module Sieve.Test where
import Sieve
import Test.Hspec
import Text.Printf

main :: IO ()
main = hspec $ do
    describe "Primes up to 0" $
      it (printf "should return %s given %s as input" (show (expected0::[Int])) (show input0))
      $ primes input0 `shouldBe` expected0
    describe "Primes up to 1" $
      it (printf "should return %s given %s as input" (show (expected1::[Int])) (show input1))
      $ primes input1 `shouldBe` expected1
    describe "Primes up to 2" $
      it (printf "should return %s given %s as input" (show expected2) (show input2))
      $ primes input2 `shouldBe` expected2
    describe "Primes up to 3" $
      it (printf "should return %s given %s as input" (show expected3) (show input3))
      $ primes input3 `shouldBe` expected3
    describe "Primes up to 5" $
      it (printf "should return %s given %s as input" (show expected5) (show input5))
      $ primes input5 `shouldBe` expected5
    describe "Primes up to 7" $
      it (printf "should return %s given %s as input" (show expected7) (show input7))
      $ primes input7 `shouldBe` expected7
    describe "Primes up to 11" $
      it (printf "should return %s given %s as input" (show expected11) (show input11))
      $ primes input11 `shouldBe` expected11
    describe "Primes up to 120" $
      it (printf "should return %s given %s as input" (show expected120) (show input120))
      $ primes input120 `shouldBe` expected120
  where
    input0 = 0
    expected0 = []
    input1 = 1
    expected1 = []
    input2 = 2
    expected2 = [2]
    input3 = 3
    expected3 = [2,3]
    input5 = 5
    expected5 = [2,3,5]
    input7 = 7
    expected7 = [2,3,5,7]
    input11 = 11
    expected11 = [2,3,5,7,11]
    input120 = 120
    expected120 = [2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97,101,103,107,109,113]
