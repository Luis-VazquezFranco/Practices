class Solution {
    function romanToInt($s) {
        $roman = [
            'I' => 1, 'V' => 5, 'X' => 10, 'L' => 50,
            'C' => 100, 'D' => 500, 'M' => 1000
        ];

        $sum = 0;
        $prevValue = $roman[$s[0]];
        for ($i = 1; $i < strlen($s); $i++) {
            $currentValue = $roman[$s[$i]];
            if ($currentValue > $prevValue)
                $sum -= $prevValue;
            else
                $sum += $prevValue;
            $prevValue = $currentValue;
        }
        $sum += $prevValue;
        return $sum;
    }
}