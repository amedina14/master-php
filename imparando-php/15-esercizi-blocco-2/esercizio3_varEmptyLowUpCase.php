<?php

/* 
 * Esercizio 3: Programma che controlli se una variabile è vuota e se lo è
 * riempirla con testo in minuscola e staparlo in maiuscolo e grassetto.
 */

if(isset($_GET['var'])){    
    $variabile = $_GET['var'];
    if(!empty($variabile)){
        echo '<b>'.strtoupper($variabile).'</b>';
    } else {
        $variabile = "<b>Assegnazione di default, esercizio 3.</b>";
        echo strtoupper($variabile);
    }
} else{
    echo "<p>Inserire parametro nel url con get: ?var=demo</p>";
}


