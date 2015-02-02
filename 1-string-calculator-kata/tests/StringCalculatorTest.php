<?php

namespace Kata;


class StringCalculatorTest extends \PHPUnit_Framework_TestCase {

    private $calculator;

    protected function setUp()
    {
        $this->calculator = new StringCalculator();
    }

    /**
     * @param string $numbers
     * @param int $expected
     * @dataProvider addProvider
     */
    public function testAdd($numbers, $expected)
    {
        $this->assertEquals($expected, $this->calculator->add($numbers));
    }

    public function addProvider()
    {
        return array(
            'empty string' => array('', 0),
        );
    }
}
