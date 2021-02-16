<style>
    #tabelline{
        width: 50%;
        float: left;
    }
</style>
<?php

echo '<div id="tabelline">';
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
echo '</div>';

// Esempio funzione: Calcolatrice, Parametri opzionali, Return
function calcolatrice($num1, $num2, $grassetto = false) {
    $somma = $num1 + $num2;
    $resta = $num1 - $num2;
    $molti = $num1 * $num2;
    $div = $num1 / $num2;

    $stringa_testo="";

    if ($grassetto != false) {
        $stringa_testo.= "<h1>";
    }

    $stringa_testo.= "Somma: $somma</br>";
    $stringa_testo.= "Resta: $resta</br>";
    $stringa_testo.= "Moltiplicazione: $molti</br>";
    $stringa_testo.= "Divisionse: $div</br>";

    if ($grassetto != false) {
        $stringa_testo.= "</h1>";
    }
    return $stringa_testo;
}

echo "<hr/>";
echo "<b>Calcolatrice con funzione</b></br>";
echo calcolatrice($num1 = 2, $num2 = 2, true);
echo "<hr/>";

echo "<b>Calcolatrice con funzione</b></br>";
echo calcolatrice($num1 = 3, $num2 = 2, false);
echo "<hr/>";

// Funzioni dentro di altre

function getNome($nome){
    $testo = "Il nome è: $nome";
    return $testo;
}
function getCognome($cognome){
    $testo = "Il cognome è: $cognome";
    return $testo;
}
function getNomeCompleto($nome,$cognome){    
    $testo="";
    $testo .= '<p>'.getNome($nome).'</p>';
    $testo .= '<p>'. getCognome($cognome).'</p>';
    return $testo;
}

echo "<h2>Funzione che invoca due funzione al suo interno: getNome e getCognome</h2>";
echo '<h3>'.getNomeCompleto("Adrian", "Medina").'</h3><hr/>';
