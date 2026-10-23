class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        //loop each item of nums 
        //add the seen value, map it likke this ['value' => 'index']
        //note this is o(n) or linear run time and linear space complexity also

        $seen = [];
        foreach($nums as $i => $value){
            $comp = $target - $value;
            if(isset($seen[$comp])){
                return [$seen[$comp], $i];
            }
            $seen[$value] = $i;
        }
        return [];
    }
}

