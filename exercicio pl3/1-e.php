<?php

$n = readline("how many students has the class? ");
$nAbove = readline("set the minimum age ? ");
$sum =0;
$count =0;
for($i =0; $i<$n; $i++){
    $age = readline("enter the age of the  student " . ($i + 1));
    if($age>$nAbove) {
        $sum = $sum + $age;
        $count++;
    }
}

$percent = ($count / $n) *100;

echo "the percentage of students above ".$nAbove." is ".$percent;
