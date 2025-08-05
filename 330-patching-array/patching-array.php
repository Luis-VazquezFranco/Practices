class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer
     */
    function minPatches($nums, $n) {
        $reachableSum = 1;
        $patches = 0;
        $i = 0;
        $length = count($nums);

        while ($reachableSum <= $n) {
            if ($i < $length && $nums[$i] <= $reachableSum) {
                $reachableSum += $nums[$i];
                $i++;
            } else {
                $reachableSum += $reachableSum;
                $patches++;
            }
        }

        return $patches;
    }
}