class Solution {
    public function convert($s, $numRows) {
        if ($numRows == 1 || strlen($s) <= $numRows) {
            return $s;
        }
        
        $rows = array_fill(0, $numRows, "");
        $currentRow = 0;
        $goingDown = false;
        
        for ($i = 0; $i < strlen($s); $i++) {
            $rows[$currentRow] .= $s[$i];
            
            if ($currentRow == 0 || $currentRow == $numRows - 1) {
                $goingDown = !$goingDown;
            }
            
            $currentRow += $goingDown ? 1 : -1;
        }
        
        return implode("", $rows);
    }
}