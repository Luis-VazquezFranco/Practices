class Solution {
    /**
     * @param Integer[] $fruits
     * @param Integer[] $baskets
     * @return Integer
     */
    function numOfUnplacedFruits($fruits, $baskets) {
        $n = count($fruits);
        $usedBaskets = array_fill(0, $n, false);
        $unplaced = 0;

        foreach ($fruits as $fruit) {
            $placed = false;
            for ($i = 0; $i < $n; $i++) {
                if (!$usedBaskets[$i] && $baskets[$i] >= $fruit) {
                    $usedBaskets[$i] = true;
                    $placed = true;
                    break;
                }
            }
            if (!$placed) {
                $unplaced++;
            }
        }

        return $unplaced;
    }
}
