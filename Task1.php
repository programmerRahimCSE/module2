<?php

// Using a while loop
echo "Using a while loop: ";
$start = 1;
$end = 20;
$step = 2;
while ($start <= $end) {
    if ($start % 2 == 0) {
        echo $start . " ";
    }
    $start += $step;
}
echo "<br>";

// Using a do-while loop
echo "Using a do-while loop: ";
$start = 1;
$end = 20;
$step = 2;
do {
    if ($start % 2 == 0) {
        echo $start . " ";
    }
    $start += $step;
} while ($start <= $end);
