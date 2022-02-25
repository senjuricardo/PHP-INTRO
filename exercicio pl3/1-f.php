<?php

$count =0;
$biggestEven =0;

do{
    $n = readline("Insert a number ");

    if($n % 2 != 0){
        $count++;
    }

    else if ($n >$biggestEven){
        $biggestEven = $n;
    }
}while($count <5);

echo "the biggest number even is ".$biggestEven;

