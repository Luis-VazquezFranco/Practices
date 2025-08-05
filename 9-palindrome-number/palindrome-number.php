class Solution {
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }

        $string = strval($x);
        $reversed_string = strrev($string);
        return $string === $reversed_string;
    }
}