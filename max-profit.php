<?php
class Solution
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit($prices)
    {
        $buy = $prices[0];
        $sell = $prices[0];
        $maxProfit = $sell - $buy;
        $mpA = [$maxProfit];
        for ($i = 0; $i < count($prices); $i++) {
            $newBuy = $prices[$i];
            if (isset($prices[$i + 1])) {
                if ($newBuy < $buy) {
                    $buy = $newBuy;
                    $sell = $buy;
                }
                $newSell = $prices[$i + 1];
                if (($newSell - $buy) >= $maxProfit && $newSell > $sell) {
                    $sell = $newSell;
                    $maxProfit = $sell - $buy;
                    $mpA[] = $maxProfit;
                }
            }
        }
        return max($mpA);
    }
}
