class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        // Opción 1: El target ya está en el array
        // La función array_search es más eficiente que in_array seguido de array_keys
        $key = array_search($target, $nums);
        if ($key !== false) {
            return $key;
        }

        // Opción 2: El target no está en el array, buscamos su posición
        foreach ($nums as $index => $number) {
            if ($number > $target) {
                // Si el número actual es mayor que el target,
                // significa que el target debe insertarse antes de este número.
                return $index;
            }
        }

        // Si el bucle termina, significa que el target es el más grande de todos
        // y debe ser insertado al final del array.
        return count($nums);
    }
}