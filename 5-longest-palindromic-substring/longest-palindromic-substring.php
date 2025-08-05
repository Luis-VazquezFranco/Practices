class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        if (strlen($s) < 2) {
            return $s;
        }

        $maxLength = 1;
        $start = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $len1 = $this->expandFromCenter($s, $i, $i);
            $len2 = $this->expandFromCenter($s, $i, $i + 1);
            $len = max($len1, $len2);

            if ($len > $maxLength) {
                $maxLength = $len;
                $start = $i - floor(($len - 1) / 2);
            }
        }
        return substr($s, $start, $maxLength);
    }

    /**
     * @param String $s
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    function expandFromCenter($s, $left, $right) {
        while ($left >= 0 && $right < strlen($s) && $s[$left] === $s[$right]) {
            $left--;
            $right++;
        }
        return $right - $left - 1;
    }
}