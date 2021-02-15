<?php
// Somma dei numeri dal 1 al 100
echo "<h2>Ciclo for</h2><hr/><h3>Somma dei numeri dal 1 al 100: (numero sommato al suo incrementatore) </h3>";
$somma=0;
for($i=1;$i<=100;$i++){
    echo $somma+=$i;
    if($i!=100){
        echo ', ';
    } else {
        echo '.';
    }
}
echo "<p>La somma del 100 numeri è: $somma</p>";

// Tabellina di n: (con break interrompe se compie una condizione.
if (isset($_GET['x'])){
    $x=$_GET['x']; //(int)
} else {
    $x=1;
}
echo "<br><hr/><h3>Tabellina del $x</h3>";
for($i=1;$i<=10;$i++){
    
    if(is_numeric($x)){
        if($x>=100 or $x<=0){
            echo "Operazione non ammessa.<br>Il numero dev'essere minore di 100"
            . " e maggiore di 0.";
            break;
        }        
    } else {
        echo "Operazione non ammessa.<br>Il valore non è un numero";
        break;
    }
    
    $result=$x*$i;
    echo "<p>$x * $i = $result</p>";
}
echo '<p>Arrivederci e grazie!.</p>';


// Fibonacci di n
$a=0;
$b=1;
$n=10;
echo "<br><hr/><h3>Fibinacci di $n con variabile d'appoggio</h3>";
echo "$a, ";
for($i=1;$i<=$n;$i++){
    echo $result=$a+$b;
    $a=$b;
    $b=$result;
    if($i!=10){
        echo ', ';
    } else{
        echo '.';
    }
}


