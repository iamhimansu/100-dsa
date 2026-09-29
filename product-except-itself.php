<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function productExceptSelf($nums)
    {
        $prod = [];
        for ($i = 0;$i < count($nums); $i++) {
            $mul = 1;
            for ($j = 0;$j < count($nums);$j++) {
                if ($i != $j) {
                    $mul *= $nums[$j];
                }
            }
            $prod[] = $mul;
        }
        return $prod;
    }
}
