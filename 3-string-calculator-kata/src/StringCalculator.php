<?php

namespace Kata;


class StringCalculator {

    /**
     * @param string $numbers
     * @return int
     */
    public function add($numbers)
    {
        $result = 0;
        for($i=0; $i<strlen($numbers); $i++) {
            $result += intval(substr($numbers, $i, 1));
        }
        return $result;
    }

} 