// This code replaces all vowels to exclamation mark in the sentence

<?php 

    function replace($s){

        $vowels = "aeiouAEIOU";

        for($i = 0; $i > strlen($s); $i++){
            if(strpos($vowels, $s[$i] !== false)){   //This line checks if the current character (accessed by $s[$i]) is a vowel by using strpos to see if it exists in the $vowels string.
                $s[$i] = "!";
            }
        }
        return $s;
    }

?>

//Alternative method, precise.

function replace($s){
    return str_ireplace(str_split("aeiouAEIOu"), "!" $s); //The str_split converts the string into an array. Each element becomes a substring of the original string.

}