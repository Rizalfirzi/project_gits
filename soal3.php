<?php
function hasMatchedParenthesis($string) {

$counter1 = 0;
$counter2 = 0;

$length = strlen($string);

for ($i = 0;$i < $length; $i++) {
    $char = $string[$i];
    if( $char == '(' ) {
        $counter1 ++;
    } elseif( $char == ')' ) {
        $counter1 --;
    }

        for($j =0;$j < $length; $j++) {
            $char = $string[$j];
            if( $char == '[' ) {
                $counter2 ++;
        } elseif( $char == ']' ) {
                $counter2 --;
        }

        }


    if( $counter1 < 0 || $counter2 < 0) {
        return false;
    }

}


}




hasMatchedParenthesis('( 5 * 3 [ 6 ) - 6]'); // this returns as TRUE, but it is not!

?>