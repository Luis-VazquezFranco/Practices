<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {

        // Primera palabra
        $prefix = $strs[0];

        for ($i = 1; $i < count($strs); $i++) {
            //Compara la posición i del array con la primera del array. Si no es igual se acorta el prefijo. Si el prefijo se vacía, no hay cadena común al inicio
            while (strpos($strs[$i], $prefix) !== 0) {
                if (empty($prefix)) {
                    return "";
                }
                $prefix = substr($prefix, 0, strlen($prefix) - 1);
            }
        }
        return $prefix;
    }
}

?>