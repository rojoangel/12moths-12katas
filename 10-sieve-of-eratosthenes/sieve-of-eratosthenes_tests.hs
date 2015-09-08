import Test.HUnit (Assertion, (@=?), runTestTT, Test(..), Counts(..))
import System.Exit (ExitCode(..), exitWith)
import Sieve

exitProperly :: IO Counts -> IO ()
exitProperly m = do
  counts <- m
  exitWith $ if failures counts /= 0 || errors counts /= 0 then ExitFailure 1 else ExitSuccess

testCase :: String -> Assertion -> Test
testCase label assertion = TestLabel label (TestCase assertion)

main :: IO ()
main = exitProperly $ runTestTT $ TestList
       [ TestList $ sieveTests ++  primesTests]

sieveTests :: [Test]
sieveTests =
  [ testCase "sieve of [2]" $
    [2] @=? sieve [2]
    , testCase "sieve of [2,3]" $
    [2,3] @=? sieve [2,3]
    , testCase "sieve of [2..5]" $
    [2,3,5] @=? sieve [2..5]
    , testCase "sieve of [2..7]" $
    [2,3,5,7] @=? sieve [2..7]
    , testCase "sieve of [2..11]" $
    [2,3,5,7,11] @=? sieve [2..11]
    , testCase "sieve of [2..120]" $
    [2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97,101,103,107,109,113] @=? sieve [2..120]
  ]

primesTests :: [Test]
primesTests =
  [testCase "primes of 0" $
    [] @=? primes 0
    , testCase "primes of 1" $
    [] @=? primes 1
    , testCase "primes of 2" $
    [2] @=? primes 2
    , testCase "primes of 3" $
    [2,3] @=? primes 3
    , testCase "primes of 5" $
    [2,3,5] @=? primes 5
    , testCase "primes of 7" $
    [2,3,5,7] @=? primes 7
    , testCase "primes of 11" $
    [2,3,5,7,11] @=? primes 11
    , testCase "primes of 120" $
    [2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97,101,103,107,109,113] @=? primes 120
  ]
