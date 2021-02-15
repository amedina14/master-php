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

