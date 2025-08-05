class Solution {
    /*
    Alternativa más simple en cuanto líneas pero más lenta
        function rotate(&$nums, $k) {
        $counter = 0;
        $length = count($nums);
        while($counter !== $k){
            array_unshift($nums, $nums[$length-1]);
            unset($nums[$length]);
            $counter++;
        }
    }
    */

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
     
    function rotate(&$nums, $k) {
        $length = count($nums);
        $k %= $length;
        if ($k === 0) {
            return;
        }
        $this->reverse($nums, 0, $length - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, $length - 1);
    }

    /**
     * Invierte una parte dle array
     * @param Integer[] $nums
     * @param Integer $start
     * @param Integer $end
     */
    private function reverse(&$nums, $start, $end) {
        while ($start < $end) {
            $temp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $temp;
            $start++;
            $end--;
        }
    }
}