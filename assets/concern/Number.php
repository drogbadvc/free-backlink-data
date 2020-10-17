<?php

namespace assets\concern;

use Numeral\Numeral;

class Number {

    /**
     * @param string $value
     * @return array
     */
    public static function getDataNumbers(string $value): array
    {
        $number = Numeral::number($value)->format('0,0');
        return [$value, $number];
    }

}