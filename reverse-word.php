<?php

class Solution
{
    public function reverseWords($s)
    {
        $length = strlen($s);
        $marker = $length - 1;
        $wb = false;
        $words = [];
        // Input: s = "the sky is blue"
        while ($marker >= 0) {

            if ($s[$marker] == ' ') {
                $wb = true;
                $marker--;
                continue;
            }

            if ($wb) {
                $j = $marker + 1;
                $w = "";
                while ($j < $length) {
                    $c = $s[$j];
                    if ($c == ' ') {
                        $j++;
                        continue;
                    }
                    $w .= $c;
                    $j++;
                }
                $length = $marker + 1;
                $wb = false;
                if ($w != "") {
                    $words[] = $w;
                }
            }
            $marker--;
        }
        $j = $marker + 1;
        $w = "";
        while ($j < $length) {
            $c = $s[$j];
            if ($c == ' ') {
                $j++;
                continue;
            }
            $w .= $c;
            $j++;
        }
        $length = $marker + 1;
        $wb = false;
        if ($w != "") {
            $words[] = $w;
        }
        return implode(" ", $words);
    }
}

