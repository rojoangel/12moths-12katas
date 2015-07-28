<?php

namespace Kata;


class StringCalculator {

    const TOKENS = ",\n";

    /**
     * @param string $numbers
     * @return int
     */
    public function add($numbers)
    {
        $result = 0;
        $token = strtok($numbers, self::TOKENS);
        while($token !== false) {
            $result += intval($token);
            $token = strtok(self::TOKENS);
        }
        return $result;
    }

} 