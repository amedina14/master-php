<?php

/*
 * Esercizio 4: aventi 4 variabili (arra, string, int e boolean) scrivere
 * un programma che identifica di quale tipo sono e stampa un messaggio in base
 * al loro tipo.
 */

function stampa($arr) {
    foreach ($arr as $value) {
        echo $value . " ";
    }
}

$var1 = array(8, 7);
$var2 = "demo";
$var3 = 0;
$var4 = true;

$lista_vars = [$var3, $var4, $var1, $var2];
$debug = var_dump($lista_vars);
echo "<p><b> $debug </b></p>";
//echo gettype($lista_vars);

//$pos = 0;
foreach ($lista_vars as $key => $value) {
    if (is_array($value)) {
        //$pos = array_search($value, $lista_vars);
        //$x = (string)$value;
        echo "<p>var $key è un array. Contenuto: ";
        echo stampa($value) . "</p>";
    } elseif (is_string($value)) {
        //$pos = array_search($value, $lista_vars);
        echo "<p>var $key è una string. Contenuto: $value </p>";
    } elseif (is_integer($value)) {
        //$pos = array_search($value, $lista_vars);
        echo "<p>var $key è un numero intero. Contenuto: $value </p>";
    } elseif (is_bool($value)) {
        //$pos = array_search($value, $lista_vars);
        echo "<p>var $key è di tipo bool. Contenuto ";
        echo var_dump($value)."</p>";
    } else {
        echo "<p>Var è di un altro tipo.</p>";
    }
}

