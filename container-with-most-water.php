<?php

class Solution
{
    /**
     * @param Integer[] $height
     * @return Integer
     */
    public function maxArea($height)
    {
        $i = 0;
        $j = count($height);
        $rightIndex = $j;
        $maxCapacity = 0;
        while (true) {
            //echo "{$i}, {$j}\n";
            if ($i >= $j) {
                break;
            }
            $max = min($height[$i], $height[$rightIndex]);
            $capacity = $rightIndex - $i;
            if ($max * $capacity > $maxCapacity) {
                $maxCapacity = $max * $capacity;
            }
            $rightIndex--;
            if ($rightIndex <= $i) {
                $rightIndex = $j;
                $i++;
            }
        }
        return $maxCapacity;
    }
}
