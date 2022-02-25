<?php

$n = readline("how many students has the class? ");
$count =0;
$note =0;
for($i =0; $i<$n; $i++){
    $note = readline("enter the note of the student " . ($i+1));
    if($note<10){
    $count ++;}
}

echo "the number of negatives is ".$count;

