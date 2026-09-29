<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums)
    {
        $max = $nums[0];
        for ($i = 0; $i < count($nums); $i++) {
            $prev = $nums[$i];
            if ($prev > $max) {
                $max = $prev;
            }
            if (isset($nums[$i + 1])) {
                for ($j = $i + 1; $j < count($nums); $j++) {
                    if ($nums[$i] * $nums[$j] == 0) {
                        break;
                    }
                    $prev *= $nums[$j];
                    if ($prev > $max) {
                        $max = $prev;
                    }
                }
            }
        }
        return $max;
    }
}
