<?php

namespace Kata;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase {

    public function testOne()
    {
        $this->assertEquals(array(), PrimeFactors::generate(1));
    }

    public function testTwo()
    {
        $this->assertEquals(array(2), PrimeFactors::generate(2));
    }


    public function testFour()
    {
        $this->assertEquals(array(2, 2), PrimeFactors::generate(4));
    }

    public function testSix()
    {
        $this->assertEquals(array(2, 3), PrimeFactors::generate(6));
    }

    public function testEight()
    {
        $this->assertEquals(array(2, 2, 2), PrimeFactors::generate(8));
    }

    public function testNine()
    {
        $this->assertEquals(array(3, 3), PrimeFactors::generate(9));
    }

    public function testTwentyFive()
    {
        $this->assertEquals(array(5, 5), PrimeFactors::generate(25));
    }

}
