class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $length = count($digits);
        for($i = $length-1; $i >= 0; $i--){
            if($digits[$i] < 9){
                $digits[$i]++;
                return $digits;
            }else{
                $digits[$i] = 0;
            }
        }
        array_unshift($digits, 1);
        return $digits;
    }
}