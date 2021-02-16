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

//Funzioni variabili
/*
 * Si salva il nome di una fx in una variabile 'x' 
 * e poi per usarla si invoca 'x()'.
 */

function buongiorno(){
    return "Ciao, buongiorno!";
}
function buonasera(){
    return "Ciao, buonasera!";
}
function buonanotte(){
    return "Buonanotte!";
}

$orario=$_GET['orario'];
$myFunction="buon".$orario;
echo '<hr/><p>Funzioni variabili</p>'.$myFunction();

$giorno="buongiorno";
echo '<p>'.$giorno().'</p>';