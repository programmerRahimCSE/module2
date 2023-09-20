<?php
function AbdurRahim($numTerms) {
    
    $first = 0;
    $second = 1;

    
    if ($numTerms >= 1) {
        echo $first . ' ';
    }
    if ($numTerms >= 2) {
        echo $second . ' ';
    }


    for ($i = 3; $i <= $numTerms; $i++) {
       
        $next = $first + $second;

      
        echo $next . ' ';

    
        $first = $second;
        $second = $next;
    }
}


AbdurRahim(15);
