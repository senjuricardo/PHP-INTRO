<?php

$n1 = readline("Insert number 1 ");
$n2 = readline("Insert number 2 ");

for($i = $n1 ; $i<$n2; $i++){
    if($i % 2 ==0){
        echo $i."-";
    }
}
