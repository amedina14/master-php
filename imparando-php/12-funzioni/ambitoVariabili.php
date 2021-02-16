<?php

/*
 * Scope of variables.
 * Globali e locali.
 */

$frase = "Ne i geni sono così geni, ne i mediocri così mediocri.";
echo "$frase";
function stampa() {
    global $frase; //Dichiara variabile globale per usarla dentro della funzione.
    echo "<h3>Globale: $frase</h3>";
    $year=2021;
    return $year; //ritorna verso l'esterno la variabile interna year.
}

echo stampa();
