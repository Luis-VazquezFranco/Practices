class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $timesRepeated = array_count_values($nums);
        $maxCount = max($timesRepeated);
        return array_search($maxCount, $timesRepeated);
    }
}