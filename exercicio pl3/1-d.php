<?php

$count =0;
$sum =0;

do {
    $n = readline("Insert number  ");
    $count++;
    $sum = $sum + $n;
}while($n != 0);

$average = $sum/($count-1);

echo $average;