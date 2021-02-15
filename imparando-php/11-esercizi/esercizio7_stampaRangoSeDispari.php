<?php

/*
 * Stampa gli elementi tra due numeri che si ricevono tramite GET se l'elemento
 * è dispari.
 */

function iteratore($a, $b) {
    echo "<h2>Dominio ($a, $b) </h2>";
    echo "<p>Stampa iterazioni nel rango.</p>";
    if ($a < $b) {
        for ($i = $a; $i <= $b; $i++) {
            if ($i % 2 != 0) {
                echo "<p>$i - Disparo</p>";
            } else {
                echo "<p>$i - Paro</p>";                
            }
        }
    } elseif ($a > $b) {
        for ($i = $a; $i >= $b; $i--) {
            if ($i % 2 != 0) {
                echo "<p>$i - Disparo</p>";
            } else {
                echo "<p>$i - Paro</p>";                
            }
        }
    }
}

if (isset($_GET['a']) && isset($_GET['b'])) {

    $a = $_GET['a'];
    $b = $_GET['b'];

    if (is_numeric($a) && is_numeric($b)) {
        echo '<h2>1. Parametri ricevuti con GET</h2>';
        iteratore($a, $b);
    } else {
        echo "<h2>I valori di 'a' e/o 'b' non sono numerici.</h2>";
    }
    
} else {
    echo "<h2>1. Definire Limiti del Dominio con GET.</h2>"
    . "<br>passare parametri dalla url, es: ?a=10&b=20";
    echo '<h2>2. Rango Incrementale di Default</h2>';
    iteratore($a = 5, $b = 15);
}


