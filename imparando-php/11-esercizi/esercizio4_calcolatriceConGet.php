<?php

/*
 * Calcolatrice basica raccogliere 2 valori con GET e fare tutte
 * le operazioni basiche.
 */
echo '<h2>Calcolatrice basica</h2>';
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $a = $_GET['num1'];
    $b = $_GET['num2'];

    if (!is_numeric($a) || !is_numeric($b)) {
        echo "Operazione non riuscita.<br>1 o più valori non sono numerici.";
    } else {
        echo "Somma $a + $b: " . ($a + $b) . '<br>';
        echo "Resta $a - $b: " . ($a - $b) . '<br>';
        echo "Moltiplicazione $a * $b: " . ($a * $b) . '<br>';
        echo "Divisione $a / $b: " . ($a / $b) . '<br>';
    }
} else {
    echo "<h2>Collocare i parametri con GET</h2>"
    . "<br>Esempio: ?num1=2&num2=3";
}

