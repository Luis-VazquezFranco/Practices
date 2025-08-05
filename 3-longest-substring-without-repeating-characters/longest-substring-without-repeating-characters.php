class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        if (strlen($s) == 0) {
            return 0;
        }
        
        $charIndexMap = [];
        $maxLength = 0;
        $left = 0;

        for ($right = 0; $right < strlen($s); $right++) {
            $char = $s[$right];
            if (isset($charIndexMap[$char])) {
                $left = max($left, $charIndexMap[$char] + 1);
            }
            $charIndexMap[$char] = $right;
            $currentLength = $right - $left + 1;
            $maxLength = max($maxLength, $currentLength);
        }

        return $maxLength;
    }
}