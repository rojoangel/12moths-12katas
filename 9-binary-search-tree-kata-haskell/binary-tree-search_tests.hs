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
    Node 2 (Node 1 EmptyTree EmptyTree) EmptyTree @=? fromList [1,2]
    , testCase "tree from list one two elements 2" $
    Node 1 EmptyTree (Node 2 EmptyTree EmptyTree) @=? fromList [2,1]
    , testCase "tree from list one three elements 1" $
    Node 3 (Node 2 (Node 1 EmptyTree EmptyTree) EmptyTree) EmptyTree @=? fromList [1,2,3]
    , testCase "tree from list one three elements 2" $
    Node 2 (Node 1 EmptyTree EmptyTree) (Node 3 EmptyTree EmptyTree) @=? fromList [1,3,2]
    , testCase "tree from list one three elements 3" $
    Node 3 (Node 1 EmptyTree (Node 2 EmptyTree EmptyTree)) EmptyTree @=? fromList [2,1,3]
    , testCase "tree from list one three elements 4" $
    Node 1 EmptyTree (Node 3 (Node 2 EmptyTree EmptyTree) EmptyTree) @=? fromList [2,3,1]
    , testCase "tree from list one three elements 5" $
    Node 2 (Node 1 EmptyTree EmptyTree) (Node 3 EmptyTree EmptyTree) @=? fromList [3,1,2]
    , testCase "tree from list one three elements 6" $
    Node 1 EmptyTree (Node 2 EmptyTree (Node 3 EmptyTree EmptyTree)) @=? fromList [3,2,1]
    , testCase "tree insert to three elements 1" $
    Node 3 (Node 2 (Node 1 EmptyTree EmptyTree) EmptyTree) (Node 4 EmptyTree EmptyTree)  @=? treeInsert 4 (fromList [1,2,3])
    , testCase "tree insert to three elements 4" $
    Node 1 EmptyTree (Node 2 EmptyTree (Node 3 EmptyTree (Node 4 EmptyTree EmptyTree))) @=? treeInsert 4 (fromList [3,2,1])
    , testCase "test from list empty list" $
    EmptyTree @=? fromList ([]::[Int]) -- That was tricky ;)
    , testCase "test inOrder empty tree" $
    [] @=? inOrder (EmptyTree::(BinarySearchTree Int))
    , testCase "test inOrder single node tree" $
    [1] @=? inOrder (Node 1 EmptyTree EmptyTree)
    , testCase "test inOrder node + right" $
    [1,2] @=? inOrder (Node 1 EmptyTree (Node 2 EmptyTree EmptyTree))
    , testCase "test inOrder node + left" $
    [1,2] @=? inOrder (Node 2 (Node 1 EmptyTree EmptyTree) EmptyTree)
    , testCase "test inOrder node + left + right" $
    [1,2,3] @=? inOrder (Node 2 (Node 1 EmptyTree EmptyTree) (Node 3 EmptyTree EmptyTree))
    , testCase "test inOrder long tree 1" $
    [1,2,3,4,5,6,7,8,9] @=? inOrder (fromList [6,7,8,2,3,9,1,4,5])
    , testCase "test inOrder long tree 1" $
    [1,2,3,4,5,6,7,8,9] @=? inOrder (fromList [1,8,6,7,3,9,4,5,2])
  ]
