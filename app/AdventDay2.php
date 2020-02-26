<?php

namespace App;

class AdventDay2
{
    const ADD_CODE = 1;
    const MULTIPLY_CODE = 2;
    const EXIT_CODE = 99;
    const OP_CODE_LENGTH = 4;

    /**
     * @see https://adventofcode.com/2019/day/2
     * @param string $opCode
     * @return string
     */
    public static function program1202(string $opCode): string
    {
        $codes = explode(',', $opCode);
        for ($i = 0; $i < count($codes); $i += self::OP_CODE_LENGTH) {
            $operation = (int) $codes[$i];
            if ($operation === self::EXIT_CODE) {
                break;
            }

            if ($operation !== self::ADD_CODE && $operation !== self::MULTIPLY_CODE) {
                continue;
            }
            $codes[$codes[$i+3]] = $operation === self::ADD_CODE ? $codes[$codes[$i+1]] + $codes[$codes[$i+2]] : $codes[$codes[$i+1]] * $codes[$codes[$i+2]];
        }
        return implode(',', $codes);
    }
}
