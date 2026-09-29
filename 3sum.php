<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function threeSum($nums)
    {
        $out = [];
        for ($i = 0; $i < count($nums); $i++) {
            $j = $i + 1;
            $k = $i + 2;
            if (isset($nums[$k])) {
                $one = $nums[$i];
                while ($j < count($nums) - 1) {
                    //echo "$i, $j, $k\n";
                    //echo $nums[$i].','.$nums[$j].','.$nums[$k]."\n";
                    $two = $nums[$j];
                    $three = $nums[$k];
                    if ($one + $two + $three == 0) {
                        $ts = [$nums[$i], $nums[$j], $nums[$k]];
                        sort($ts);
                        $s = implode('_', $ts);
                        if (!isset($out[$s])) {
                            $out[$s] = $ts;
                        }
                    }
                    $k++;
                    if ($k >= count($nums)) {
                        $j++;
                        $k = $j + 1;
                    }
                }
            }
        }
        return $out;
    }
}
