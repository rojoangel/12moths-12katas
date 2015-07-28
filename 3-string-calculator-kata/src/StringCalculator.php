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
        $token = strtok($numbers, ',');
        while($token !== false) {
            $result += intval($token);
            $token = strtok(',');
        }
        return $result;
    }

} 