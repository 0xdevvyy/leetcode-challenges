class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $symbols = [
            'I' => 1, 'V' => 5, 'X' => 10,
            'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000
        ];

        $total = 0;

        for($i = 0; $i < strlen($s); $i++){
            $current = $symbols[$s[$i]];
            $next = $symbols[$s[$i + 1]] ?? 0;


            if($current < $next){
                $total -= $current;
            }else{
                $total += $current;
            }
        }
        return $total;
    }
}


//first will iterate the item and will look for the $s[$i] which is 0 and symbols[I] which is value 1 , the next symbol is $s[1] and symbol[V] which value at 5
//then will chec if the current is less than the next symbol if it is it will substract the value of current in total which will be -1, 

//second iteration will be $s[$i] will be symbols[V] which is value at 5 and at the next is 0 because of the null coalescing operator, so it will check again if current is lessthan next
//if it is not it will be adding the current to total, but the total is -1 so it will be -1 + 5 which will be the return of 4


//it will be O(n) or linear runtime,  and the space complexity is O(1) which is constant space,