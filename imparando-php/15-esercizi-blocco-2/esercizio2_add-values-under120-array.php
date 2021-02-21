<?php

/* 
 * Scrivere un programma con php che aggiunga valori in un array mentre la sua
 * lunghezza sia minore a 120 e poi stamparlo su schermo.
 */

function stampa($arr){
    $ris="";
    foreach ($arr as $value) {
        $ris .= $value.'<br>';
    }
    return $ris;
}

$vector = [];

echo "<h2>Esercizio 2: array lungo massimo 120</h2>";
for ($i=0;$i<120;$i++) {    
    array_push($vector, rand(1,120));
}

echo stampa($vector);

echo '<h3>Conteggio:</h3>';
echo sizeof($vector);

