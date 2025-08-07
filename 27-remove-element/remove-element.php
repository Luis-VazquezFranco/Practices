class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        foreach($nums as $index => $num){
            if($val === $num){
                unset($nums[$index]);
            }
        }
        return count($nums);
    }
}