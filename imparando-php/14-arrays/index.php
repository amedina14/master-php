<?php

/* 
 * Array
 * Insieme di dati/variabili sotto un unico nome.
 * Per accedere ai dati al suo interno si usano gli indici.
 */

echo '<br><h2>Arrays</h2>';

$film = "Batman";
$films = array('Batman','Spiderman', 'Il signore degli anelli');
$cantanti = ['2pac','Drake','JLoe'];

var_dump($films);
echo $films[1];

echo '<br><br>';
var_dump($cantanti);
echo '<br>';
echo $cantanti[2];

