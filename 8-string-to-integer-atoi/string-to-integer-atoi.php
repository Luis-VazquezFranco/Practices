class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $s = ltrim($s);

        $sign = 1;
        if (!empty($s) && ($s[0] === '-' || $s[0] === '+')) {
            $sign = ($s[0] === '-') ? -1 : 1;
            $s = substr($s, 1); 
        }

        if (!preg_match('/^\d+/', $s, $matches)) {
            return 0; 
        }

        $num = (int) $matches[0] * $sign;

        $intMax = (2 ** 31) - 1;
        $intMin = -(2 ** 31);
        if ($num > $intMax) return $intMax;
        if ($num < $intMin) return $intMin;

        return $num;
    }
}
