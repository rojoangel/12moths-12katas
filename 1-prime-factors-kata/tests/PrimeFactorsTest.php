<?php

namespace Kata;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase {

    public function testOne()
    {
        $this->assertEquals(array(1), PrimeFactors::generate(1));
    }

}
 