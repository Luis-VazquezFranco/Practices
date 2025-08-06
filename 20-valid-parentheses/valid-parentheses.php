<?php
class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $map = [
            '(' => ')',
            '{' => '}',
            '[' => ']'
        ];

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            if (array_key_exists($char, $map)) {
                array_push($stack, $char);
            } else {
                if (empty($stack)) {
                    return false;
                }
                $lastOpen = array_pop($stack);
                if ($map[$lastOpen] !== $char) {
                    return false;
                }
            }
        }
        return empty($stack);
    }
}
?>