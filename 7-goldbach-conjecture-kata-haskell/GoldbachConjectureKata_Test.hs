module GoldbachConjectureKata_Test where

import GoldbachConjectureKata(partition_of, is_prime)
import Test.HUnit

testPartition4 = TestCase $ assertEqual 
  "Should get [2,2] from 4" [(2,2)] (partition_of 4)

testPartition6 = TestCase $ assertEqual 
  "Should get [3,3] from 3" [(3,3)] (partition_of 6)

testPartition8 = TestCase $ assertEqual 
  "Should get [3,5] from 8" [(3,5)] (partition_of 8)

testPartition10 = TestCase $ assertEqual 
  "Should get ([3,7],[5,5]) from 10" [(3,7),(5,5)] (partition_of 10)

testPartition52 = TestCase $ assertEqual
	"Should get [(5,47), (11,41), (23,29)] from 52" [(5,47), (11,41), (23,29)] (partition_of 52)

testPartition100 = TestCase $ assertEqual 
  "Should get [(3,97), (11,89), (17,83), (29,71), (41,59), (47,53)] from 99" [(3,97), (11,89), (17,83), (29,71), (41,59), (47,53)]  (partition_of 100)

is_prime2 = TestCase $ assertEqual
	"Should get True from 2" True (is_prime 2)

is_prime8 = TestCase $ assertEqual
	"Should get False from 8" False (is_prime 8)

main :: IO Counts
main = runTestTT $ TestList [testPartition4, testPartition6, testPartition8, testPartition10, testPartition52, testPartition100, is_prime2, is_prime8]
