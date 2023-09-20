<?php

$first = 0;
$second = 1;


$count = 0;

while ($count < 10) {
 
    $next = $first + $second;


    echo $next . ' ';

  
    if ($next > 100) {
       
        break;
    }

    $first = $second;
    $second = $next;

 
    $count++;
}
