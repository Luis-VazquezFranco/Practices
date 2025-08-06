class Solution {
    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $values = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
        $symbols = ["M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"];
        
        $roman = "";
        for ($i = 0; $i < count($values); $i++) {
            //Si el número que entra es mayor o igual al elemento i del array, se añade ese número romano y se resta el valor al número inicial. Hasta llegar a 0
            while ($num >= $values[$i]) {
                $roman .= $symbols[$i];
                $num -= $values[$i];
            }
        }
        
        return $roman;
    }
}