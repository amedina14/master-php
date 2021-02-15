<?php

/* 
 * Stampa i numeri tra due numeri che si ricevono tramite GET.
*/
function iteratore($a,$b){
    echo "<h2>Dominio ($a, $b) </h2>";
    echo "<p>Stampa iterazioni nel rango.</p>";
    if($a<$b){        
        for($i=$a;$i<=$b;$i++){
            echo "<p>$i</p>";
        }
    } elseif ($a>$b){
        for($i=$a;$i>=$b;$i--){
            echo "<p>$i</p>";
        }
    }
}


if(isset($_GET['a']) && isset($_GET['b'])){

    $a=$_GET['a'];
    $b=$_GET['b'];

    if(is_numeric($a) && is_numeric($b)){    
        echo '<h2>Parametri ricevuti con GET</h2>';
        iteratore($a, $b);
    } else {
        echo "<h2>Definire Limiti del Dominio con GET.</h2>";
    }
    
    echo '<h2>Rango Incrementale di Default</h2>';
    iteratore($a=5, $b=15);
    
    
} else {
    echo "<h2>Definire Limiti del Dominio con GET.</h2>";
}


