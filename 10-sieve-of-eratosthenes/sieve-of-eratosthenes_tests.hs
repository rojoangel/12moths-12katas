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
       [ TestList binaySearchTreeTests ]

binaySearchTreeTests :: [Test]
binaySearchTreeTests =
  [ testCase "sieve of [2]" $
    [2] @=? primes [2]
    , testCase "sieve of [1]" $
    [] @=? primes [1]
    , testCase "sieve of []" $
    [] @=? primes []
    , testCase "sieve of [2,3]" $
    [2,3] @=? primes [2,3]
    , testCase "sieve of [2..5]" $
    [2,3,5] @=? primes [2..5]
    , testCase "sieve of [2..7]" $
    [2,3,5,7] @=? primes [2..7]
    , testCase "sieve of [2..11]" $
    [2,3,5,7,11] @=? primes [2..11]
  ]
