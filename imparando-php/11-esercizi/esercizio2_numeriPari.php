<?php

/* 
 * Numeri pari dal 1 al 100
 */
echo "Numeri pari dal 1 al 100";
for($i=1;$i<=100;$i++){
    if($i%2==0){
        echo $i;
        if($i<>100){
            echo ", ";
        } else{
            echo '.';
        }
    }
}
