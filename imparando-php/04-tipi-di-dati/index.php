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


?>
