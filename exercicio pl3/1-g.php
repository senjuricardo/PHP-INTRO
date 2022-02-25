<?php

$number = readline("Insert a number ");


for($i =1; $i<$number*2; $i++){

    if ($i > $number){
        echo $number*2-$i." ";
    }
    else{
        echo "$i ";
    }
}



