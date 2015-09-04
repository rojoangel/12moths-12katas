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
    , testCase "add same value to a Node" $
    Node 4 EmptyTree EmptyTree @=? treeInsert 4 (Node 4 EmptyTree EmptyTree)
    , testCase "add left value to a Node" $
    Node 4 (Node 3 EmptyTree EmptyTree) EmptyTree @=? treeInsert 3 (Node 4 EmptyTree EmptyTree)
    , testCase "add left value to a Node" $
    Node 4 EmptyTree (Node 5 EmptyTree EmptyTree) @=? treeInsert 5 (Node 4 EmptyTree EmptyTree)
    , testCase "tree from list one elem" $
    Node 1 EmptyTree EmptyTree @=? fromList [1]
    , testCase "tree from list one two elements 1" $
    Node 2 (Node 1 EmptyTree EmptyTree) EmptyTree @=? fromList[1,2]
    , testCase "tree from list one two elements 2" $
    Node 1 EmptyTree (Node 2 EmptyTree EmptyTree) @=? fromList[2,1]
    , testCase "tree from list one three elements 1" $
    Node 3 (Node 2 (Node 1 EmptyTree EmptyTree) EmptyTree) EmptyTree @=? fromList[1,2,3]
    , testCase "tree from list one three elements 2" $
    Node 2 (Node 1 EmptyTree EmptyTree) (Node 3 EmptyTree EmptyTree) @=? fromList[1,3,2]
    , testCase "tree from list one three elements 3" $
    Node 3 (Node 1 EmptyTree (Node 2 EmptyTree EmptyTree)) EmptyTree @=? fromList[2,1,3]
    , testCase "tree from list one three elements 4" $
    Node 1 EmptyTree (Node 3 (Node 2 EmptyTree EmptyTree) EmptyTree) @=? fromList[2,3,1]
    , testCase "tree from list one three elements 5" $
    Node 2 (Node 1 EmptyTree EmptyTree) (Node 3 EmptyTree EmptyTree) @=? fromList[3,1,2]
    , testCase "tree from list one three elements 6" $
    Node 1 EmptyTree (Node 2 EmptyTree (Node 3 EmptyTree EmptyTree)) @=? fromList[3,2,1]
  ]
