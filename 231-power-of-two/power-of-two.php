class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        $result = log($n, 2);
        if (fmod($result, 1.0) === 0.0){
            return true;
        } else{
            return false;
        }
    }
}