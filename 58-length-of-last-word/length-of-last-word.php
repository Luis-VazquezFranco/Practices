class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $s = trim($s);
        $array = explode(" ", $s);
        $arrayLength = count($array);
        echo "array: " . var_export($array,true) . "length: " . $arrayLength;
        return strlen($array[$arrayLength-1]);
    }
}