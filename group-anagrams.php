<?php

class Solution
{
    /**
     * @param String[] $strs
     * @return String[][]
     */
    public function groupAnagrams($strs)
    {
        $ords = [];
        foreach ($strs as $str) {
            $ord = [];
            $i = 0;
            while (isset($str[$i])) {
                $ord[] = $str[$i];
                $i++;
            }
            sort($ord);
            $sortedString = implode('', $ord);
            $ords[$sortedString][] = $str;
        }
        return $ords;
    }
}
