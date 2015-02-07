<?php

namespace Kata;

class PrimeFactors {

    /**
     * @param $value
     * @return array
     */
    public static function generate($value)
    {
        $primes = array();

        for ($candidate = 2; $value > 1; $candidate = $candidate + 1) {
            for( ; $value%$candidate == 0; $value = $value / $candidate) {
                array_push($primes, $candidate);
            }
        }

        return $primes;
    }
}
