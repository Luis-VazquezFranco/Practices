class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $s = trim($s);
        $array = explode(" ", $s);
        $arrayLength = count($array);
        return strlen($array[$arrayLength-1]);
    }
}