<?php

namespace App;

class AdventDay1
{
    /**
     * Calculates fuel required based on a mass. RECURSIVE UNTIL 0
     *
     * @see https://adventofcode.com/2019/day/1
     * @param int $mass
     * @return int
     */
    public static function calculateFuel(int $mass): int
    {
        $fuel = floor($mass / 3) - 2;
        if ($fuel <= 0) {
            return 0;
        }
        return self::calculateFuel($fuel) + $fuel;
    }
}
