class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $key = array_search($target, $nums);
        if ($key !== false) {
            return $key;
        }
        foreach ($nums as $index => $number) {
            if ($number > $target) {
                return $index;
            }
        }

        return count($nums);
    }
}