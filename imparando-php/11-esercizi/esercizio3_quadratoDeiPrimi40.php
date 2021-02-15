<?php

/* 
 * Stampare il quadrato dei primi 40 numeri naturali.
 */

echo "<h2>CON WHILE</h2>";
$c=1;
while($c<=40){
    $result=$c*$c;
    echo "<p><b>Quadrato di $c :</b> $result</p>";
    $c++;
}

//con for
echo "<h2>CON FOR</h2>";
for($i=1;$i<=40;$i++){
    $ris=$i*$i;
    echo "Quadato di $i : $ris<br>";
}