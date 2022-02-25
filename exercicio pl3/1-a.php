<?php

$n = readline("how many students has the class? ");
$count =0;
$note =0;
for($i =0; $i<$n; $i++){
    $note = readline("enter the note of the student " . ($i+1));
    $count = $count + $note;
}
$average = $count/$n;

echo "the average is ".$average;
echo $count;