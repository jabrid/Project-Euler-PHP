<?php


//Project Euler #1: Multiple of 3 and 5
//If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
//Find the sum of all the multiples of 3 or 5 below 1000.


for ($count=0; $count<1000; $count++){
    
    $total;
    
    if ($count % 3 == 0 OR $count % 5 == 0){
        
        $total += $count;
    }
    
}

echo $total;

?>