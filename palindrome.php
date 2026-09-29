<?php

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    public function isPalindrome($s)
    {
        $j = strlen($s) ;
        $i = 0;
        while (true) {

            $leftChar = $s[$i];
            $rightChar = $s[$j - 1];
            if ($j <= $i) {
                break;
            }
            if (($leftChar < '0' || $leftChar > '9') &&  // Not a number AND
    ($leftChar < 'A' || $leftChar > 'Z') &&  // Not an uppercase letter AND
    ($leftChar < 'a' || $leftChar > 'z')) {     // Not a lowercase letter)
                $i++;
                continue;
            }
            if (($rightChar < '0' || $rightChar > '9') &&  // Not a number AND
    ($rightChar < 'A' || $rightChar > 'Z') &&  // Not an uppercase letter AND
    ($rightChar < 'a' || $rightChar > 'z')) {
                $j--;
                continue;
            }
            echo "{$s[$i]} , {$s[$j - 1]}\n";

            if (strtoupper($s[$i]) != strtoupper($s[$j - 1])) {
                return false;
            }

            $i++;
            $j--;


        }
        return true;
    }
}
