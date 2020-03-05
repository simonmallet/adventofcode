<?php

namespace App;

class AdventDay3
{
    /**
     * Receive a wire's path and return visited nodes
     * Format: R8,U5,L5,D3
     *
     * @see https://adventofcode.com/2019/day/3
     * @param string $wirePath
     * @return array
     */
    public static function fuelManagement(string $wirePath): array
    {
        $currentPositionX = 0;
        $currentPositionY = 0;
        $visited = [];
        $moveRight = function($spaces) use (&$visited, &$currentPositionX, &$currentPositionY) {
            for ($i = 1; $i <= $spaces; $i++) {
                $currentPositionX++;
                $visited[] = "{$currentPositionX}.{$currentPositionY}";
            }
        };

        $moveUp = function($spaces) use (&$visited, &$currentPositionX, &$currentPositionY) {
            for ($i = 1; $i <= $spaces; $i++) {
                $currentPositionY++;
                $visited[] = "{$currentPositionX}.{$currentPositionY}";
            }
        };

        $moveLeft = function($spaces) use (&$visited, &$currentPositionX, &$currentPositionY) {
            for ($i = 1; $i <= $spaces; $i++) {
                $currentPositionX--;
                $visited[] = "{$currentPositionX}.{$currentPositionY}";
            }
        };

        $moveDown = function($spaces) use (&$visited, &$currentPositionX, &$currentPositionY) {
            for ($i = 1; $i <= $spaces; $i++) {
                $currentPositionY--;
                $visited[] = "{$currentPositionX}.{$currentPositionY}";
            }
        };

        $operations = explode(',', $wirePath);
        foreach ($operations as $operation) {
            $operationMoves = substr($operation, 1);
            switch ($operation[0]) {
                case 'R':
                    $moveRight($operationMoves);
                    break;
                case 'U':
                    $moveUp($operationMoves);
                    break;
                case 'L':
                    $moveLeft($operationMoves);
                    break;
                case 'D':
                    $moveDown($operationMoves);
                    break;
            }
        }
        return $visited;
    }
}
