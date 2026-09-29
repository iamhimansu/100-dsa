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
        $out = [];
        $mul = 1;
        foreach ($nums as $num) {
            if ($num == 0) {
                $prod[] = $num;
            } else {
                $mul *= $num;
                $prod[] = $mul;
            }
        }
        foreach ($nums as $n => $num) {
            $val = 1;

            if (isset($nums[$n - 1])) {
                $val = $nums[$n - 1];
            }

            $out[] = $val * $mul / $prod[$n];
        }
        return $out;
    }
}
