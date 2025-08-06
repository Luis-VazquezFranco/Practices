class Solution {
    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {

        $mapping = [
            '2' => 'abc',
            '3' => 'def',
            '4' => 'ghi',
            '5' => 'jkl',
            '6' => 'mno',
            '7' => 'pqrs',
            '8' => 'tuv',
            '9' => 'wxyz'
        ];

        $result = [];
        $this->backtrack($digits, $currentCombination, $mapping, $result);
        return $result;
    }

    /**
     *
     * @param String $digits restantes
     * @param String $currentCombination combinación actual
     * @param array $mapping mapeo de dígitos a letras
     * @param array $result array de resultados
     */
    private function backtrack($digits, $currentCombination, $mapping, &$result) {
        // Caso base: si ya no quedan dígitos, hemos formado una combinación completa
        if (empty($digits)) {
            $result[] = $currentCombination;
            return;
        }

        $firstDigit = $digits[0];
        $letters = $mapping[$firstDigit];

        // Se recorre el array del dígito 1º
        for ($i = 0; $i < strlen($letters); $i++) {
            $letter = $letters[$i];
            $this->backtrack(
                substr($digits, 1), // Resto de dígitos
                $currentCombination . $letter,
                $mapping,
                $result
            );
        }
    }
}