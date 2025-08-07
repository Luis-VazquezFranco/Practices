class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $uniqueNums = array_unique($nums);
        $uniqueNums = array_values($uniqueNums);
        $nums = $uniqueNums;
        return count($nums);
    }
}