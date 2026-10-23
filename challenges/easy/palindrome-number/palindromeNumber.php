class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
    
        $original = $x;
        $reversed = 0; 

        while($x > 0){
            $digit = $x % 10;
            $reversed = $reversed * 10 + $digit;
            $x = (int) ($x / 10);
        }

        return $original === $reversed;
    }
}


//explanation: 

//will iterate until x > 0
//first iteration will be 121 % 10 which is 1, reversed is also 1, x = 12
//second iteration will be 12 % 10 which is 2, reveres is 12, x = 1,
//third 1 % 10 is 1, reversed will be 121, x = 0 and the loop will stop
//in the negative the loop will not iterate because x is less than 0; so it will be false.
