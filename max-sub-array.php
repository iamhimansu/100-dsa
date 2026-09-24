<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxSubArray($nums)
    {
        $maxSum = $nums[0];
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            $temp = [];
            foreach ($nums as &$num) {
                $temp[] = $num;
                //echo implode(', ', $temp)."\n";
                if (array_sum($temp) > $maxSum) {
                    $maxSum = array_sum($temp);
                    $temp = [$maxSum];
                }
            }
            unset($nums[$i]);
        }
        return $maxSum;
    }
}
