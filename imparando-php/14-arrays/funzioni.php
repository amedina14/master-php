<?php

$cantanti = ['2pac', 'Drake', 'JLoe', 'A-ha'];
$numeri = [4,7,84,654,15,23,479,5];

echo "<h2>Funzioni degli array</h2>";

// Ordinare
echo "<p><b>Asort(): ordina crescentemente, sia numericamente che alfabeticamente</b></p>";
asort($cantanti);
foreach ($cantanti as $cantante){
    echo "<p>$cantante</p>";
}
echo "<p><b>Sort(): ordina numeri</b></p>";
sort($numeri);
for ($i=0;$i<count($numeri);$i++){
    echo "$numeri[$i]<br>";
}

// Aggiungere elementi all'array
$cantanti[] = "Bad Bunny";
$cantanti[] = "Twenty One Pilots";
array_push($cantanti, "Billie Elish");
array_push($cantanti, "pop singer");
array_pop($cantanti); // rimuove l'ultimo elemento dell'array

echo "<p><b>\$array[]: aggiungi elemenri all'array</b></p>";
for ($i=0;$i<count($cantanti);$i++){
    echo "$cantanti[$i]<br>";        
}

// Rimuovere elementi specifici
unset($cantanti[1]);

echo "<p><b>rimuovere elemento specifico dell'array</b></p>";
var_dump($cantanti);

// Elementi casuali di un array
echo "<p><b>Indice casuale dell'array</b></p>";
$indice = array_rand($cantanti);
echo $cantanti[$indice];

// Invertire elementi di un array
echo "<p><b>Invertire alementi di un array</b></p>";
var_dump(array_reverse($cantanti));

// Cerca dentro di un array
echo "<p><b>Cerca dentro di un array</b></p>";
$risultato = array_search('Billie Elish', $cantanti);
echo 'Cerca indice di \'Billie Elish\': '.$risultato.'<br>';
var_dump($risultato);

// Conta elementi di un array
echo "<p><b>Conta elementi di un array</b></p>";
echo 'Count() Numero elementi cantanti: '.count($cantanti).'<br>';
echo 'Sizeof() cantanti: '. sizeof($cantanti).'<br>';

