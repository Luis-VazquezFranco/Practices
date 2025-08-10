class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        // $a = intval($a);
        // $b = intval($b);

        // $decimalA = bindec($a);
        // $decimalB = bindec($b);

        // $decimalC = $decimalA + $decimalB;

        // return decbin($decimalC);
        $result = '';
        $i = strlen($a) - 1;
        $j = strlen($b) - 1;
        $carry = 0;

        while ($i >= 0 || $j >= 0 || $carry) {
            $sum = $carry;

            if ($i >= 0) {
                $sum += (int)$a[$i];
                $i--;
            }

            if ($j >= 0) {
                $sum += (int)$b[$j];
                $j--;
            }

            $result = ($sum % 2) . $result;
            $carry = (int)($sum / 2);
        }

        return $result;
    }
}