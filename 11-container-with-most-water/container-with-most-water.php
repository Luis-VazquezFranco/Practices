class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
     function maxArea($height) {
        $left = 0;
        $right = count($height) - 1;
        $max_area = 0;

        while ($left < $right) {
            $current_height = min($height[$left], $height[$right]);
            $current_width = $right - $left;
            $current_area = $current_height * $current_width;
            
            $max_area = max($max_area, $current_area);

            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }
        
        return $max_area;
    }
     /* Opción con menos líneas pero más costosa computacionalmente
    function maxArea($height) {
        $max = 0;
        foreach ($height as $index => $altura){
            for ($i = 0; $i<count($height); $i++){
                if ($index != $i){
                    $area = min($height[$i],$height[$index]) * ($index -($i));
                    if ($area >= $max) {
                        $max = $area;
                    }
                }
            }
        }
        return $max;
    }*/
}