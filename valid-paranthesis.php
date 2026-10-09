<?php
class Solution
{
    /**
     * @param String $s
     * @return bool
     */
    public function isValid($s)
    {
        $i = 0;
        $opened = 0;
        $closed = 0;
        $oc = [];
        //[()([]])

        while (isset($s[$i])) {
            if (in_array($s[$i], ['(', '[', '{'], true)) {
                $oc[$i] = false;
                $opened++;
            }

            if (in_array($s[$i], [')', ']', '}'], true)) {
                $closed++;
                $j = $i;
                while ($j >= 0) {
                    if (isset($oc[$j]) && $oc[$j] == false) {
                        break;
                    }
                    $j--;
                }
                if (($s[$j] == '(' && $s[$i] == ')') ||
                        ($s[$j] == '[' && $s[$i] == ']') ||
                        ($s[$j] == '{' && $s[$i] == '}')) {
                    $oc[$j] = true;
                    unset($oc[$j]);
                    $opened--;
                    $closed--;
                }
            }

            $i++;
        }
        return !in_array(false, $oc, true) && $opened == $closed;
    }
}
