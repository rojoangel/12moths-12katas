import Test.HUnit (Assertion, (@=?), runTestTT, Test(..), Counts(..))
import System.Exit (ExitCode(..), exitWith)
import BinarySearchTree

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
  [ testCase "add single 'Char' value to empty tree" $
    Node 'A' EmptyTree EmptyTree @=? treeInsert 'A' EmptyTree
    , testCase "add single 'Integer' value to empty tree" $
    Node 4 EmptyTree EmptyTree @=? treeInsert 4 EmptyTree
--  , testCase "no difference between identical strands" $
--    0 @=? hammingDistance "GGACTGA" "GGACTGA"
  ]
