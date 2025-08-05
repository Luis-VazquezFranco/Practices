class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $length = count($nums);
        for ($i = 0; $i < $length - 1; $i++) {
            $j = $i+1;
            while ($j <= $length) {
                if($nums[$i]+$nums[$j] ==$target) {
                    return array($i, $j);
                } else {
                    $j += 1;
                }
            }
        }
        
    }
}