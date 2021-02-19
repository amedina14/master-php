<?php

/*
 * Array
 * Insieme di dati/variabili sotto un unico nome.
 * Per accedere ai dati al suo interno si usano gli indici.
 */

echo '<h2>Arrays</h2>';

// Definizione di variabili e arrays
$film = "Batman";
$films = array('Batman', 'Spiderman', 'Il signore degli anelli');
$cantanti = ['2pac', 'Drake', 'JLoe'];

// Referenziamento e debug dei array
var_dump($films);
echo '<br>';
echo $films[1];

echo '<br><br>';
var_dump($cantanti);
echo '<br>';
echo $cantanti[2];

// Percorrere l'array
echo '<br><hr/><b>Iterare o percorrere array.</b>';
echo '<ul>';
echo '<p>Con for:</p>';
for($i=0;$i<count($films);$i++){
    echo '<li>'.$films[$i].'</li>';
}
echo '</ul>';

echo '<ul>';
echo '<p>Con foreach:</p>';
foreach($cantanti as $cantante){
    echo '<li>'.$cantante.'</li>';
}
echo '</ul>';

