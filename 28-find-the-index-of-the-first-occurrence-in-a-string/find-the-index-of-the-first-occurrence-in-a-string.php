class Solution {
    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $position = strpos($haystack, $needle);

        if ($position === false) {
            return -1;
        } else {
            return $position;
        }
    }
}