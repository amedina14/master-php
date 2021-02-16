<?php

function tabellina($n) {
    echo "Tabellina del $n";
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>$n x $i = " . $n * $i . '</p>';
    }
}

if (isset($_GET['n'])) {
    $n = $_GET['n'];
    echo "<h2>Tabella personalizzata</h2>";
    tabellina($n);
} else {
    echo "<h2>Inserire parametro GET 'n' nel URL, per la tabellina personalizzata.</h2>";
    for ($i = 1; $i <= 10; $i++) {
        tabellina($i);
    }
}


// Esempio funzione: Calcolatrice
function calcolatrice($num1, $num2){
    $somma=$num1+$num2;
    $resta=$num1-$num2;
    $molti=$num1*$num2;
    $div=$num1/$num2;
    echo "Somma: $somma</br>";
    echo "Resta: $resta</br>";
    echo "Moltiplicazione: $molti</br>";
    echo "Divisionse: $div</br>";
}
echo "<hr/>";
echo "<b>Calcolatrice con funzione</b></br>";
calcolatrice($num1=2, $num2=2);
echo "<hr/>";
