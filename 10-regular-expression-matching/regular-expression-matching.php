class Solution {

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch($s, $p) {
        $m = strlen($s);
        $n = strlen($p);
        $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, false));
        $dp[0][0] = true;

        for ($j = 1; $j <= $n; $j++) {
            if ($p[$j - 1] === '*') {
                $dp[0][$j] = $dp[0][$j - 2];
            }
        }

        for ($i = 1; $i <= $m; $i++) {

            for ($j = 1; $j <= $n; $j++) {

                if ($p[$j - 1] === '.' || $p[$j - 1] === $s[$i - 1]) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                } 
                else if ($p[$j - 1] === '*') {
                    $dp[$i][$j] = $dp[$i][$j - 2];
                    if ($p[$j - 2] === '.' || $p[$j - 2] === $s[$i - 1]) {
                        $dp[$i][$j] = $dp[$i][$j] || $dp[$i - 1][$j];
                    }
                }
            }
        }

        return $dp[$m][$n];
    }
}