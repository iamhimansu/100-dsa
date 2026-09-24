<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function containsDuplicate($nums)
    {
        $a = [];
        for ($i = 0;$i < count($nums); $i++) {
            if (isset($a[$nums[$i]])) {
                return true;
            } else {
                $a[$nums[$i]]++;
            }
        }
        return false;
    }
}
