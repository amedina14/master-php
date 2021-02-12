<?php

/* 
 * Tipi di dati:
 * Interi: int / integer = 99;
 * Floatanti: float / double = 3.45;
 * Catena di testo: string = "Ciao stringa";
 * Booleano: bool = true/false;
 * null;
 * Vettori: Array (colezioni di dati)
 * Oggetti
 * 
 * PHP debolmente tipato, come il python. Il lnguaggio riconosce da solo il tipo
 * utilizzato.
 */

$numero = 100;
$decimal = 27.9;
$testo = "Testo";
$booleano = true;
$nulla = null;


echo gettype($numero).'<br>';
echo gettype($decimal).'<br>';
echo gettype($testo).'<br>';
echo 'valore di booleano: '.$booleano.' (true)<br>';
echo 'tipo di dato: '.gettype($booleano).'<br>';
echo 'tipo di dato: '.gettype($nulla).'<br>';


//Debugger 
$debug= "test text debugger";
var_dump($debug);

//debug array
echo '<br>';
$my_array[]="valore 1";
$my_array[]="valore 2";
var_dump($my_array);

echo '<br>';
$second_array[5]=[1,2,'3',4,5];
var_dump($second_array);

// Interpolare dati su string
// meno veloce perchè controlla se ci sono variabili da interpolare
echo "<br>Interpolazione di variabili: $numero"; 
echo '<br>Interpolazione di variabili: $numero';
echo '<br>Interpolazione di variabili:'.$numero; // più veloce

// Visualizzare su console
echo "\n\n\tEseguire da console per vedere i risultati"
. " di questa stringa con doppi apici/virgolette (\" \")."
. "\r1.";

?>
