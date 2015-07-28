<?php

namespace Kata;


class StringCalculator {

    const SEPARATORS = ",\n";
    const CUSTOM_SEPARATOR_HEADER = "//";
    const CUSTOM_SEPARATOR_TRAILER = "\n";

    private $separators;

    function __construct()
    {
        $this->separators = self::SEPARATORS;
    }

    /**
     * @param string $text
     * @return int
     */
    public function add($text)
    {
        $numbers = $text;

        if ($this->startsWithCustomSeparatorHeader($text)) {
            $this->separators = $this->getCustomSeparator($text);
            if ($this->customSeparatorTrailerIsInTheRightPosition($text)) {
                $numbers = $this->getNumbers($text);
            }
        }

        $result = 0;
        $token = strtok($numbers, $this->separators);
        while($token !== false) {
            $result += intval($token);
            $token = strtok($this->separators);
        }
        return $result;
    }

    /**
     * @param string $text
     * @param string $start
     * @return bool
     */
    private function startsWith($text, $start)
    {
        return substr($text, 0, strlen($start)) === $start;
    }

    /**
     * @param string $text
     * @return string
     */
    private function getCustomSeparator($text)
    {
        return substr($text, strlen(self::CUSTOM_SEPARATOR_HEADER), 1);
    }

    /**
     * @param string $text
     * @return bool
     */
    private function customSeparatorTrailerIsInTheRightPosition($text)
    {
        return substr($text, strlen(self::CUSTOM_SEPARATOR_HEADER), 1) === self::CUSTOM_SEPARATOR_TRAILER;
    }

    /**
     * @param string $text
     * @return string
     */
    private function getNumbers($text)
    {
        return substr($text, strlen(self::CUSTOM_SEPARATOR_HEADER) + strlen(self::CUSTOM_SEPARATOR_TRAILER) + 1);
    }

    /**
     * @param string $text
     * @return bool
     */
    private function startsWithCustomSeparatorHeader($text)
    {
        return $this->startsWith($text, self::CUSTOM_SEPARATOR_HEADER);
    }

} 