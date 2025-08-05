class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $nums3 = array_merge($nums1, $nums2);
        $length = count($nums3);
        sort($nums3);
        if ($length%2 ==1){
            return $nums3[ceil(($length-1)/2)];
        } else {
            return ($nums3[(($length)/2)-1]+$nums3[(($length)/2)])/2;
        }
    }
}