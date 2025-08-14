<?php

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $left = 1;
        $right = $n;
        $firstBad = $n;

        while ($left <= $right) {
            $mid = floor($left + ($right - $left) / 2);
            
            if ($this->isBadVersion($mid)) {
                $firstBad = $mid;
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        
        return $firstBad;
    }
}

?>