<?php

$num = 0;
//$c=0;
while($num <= 10){
    
    echo $num;
    if($num != 10){
        echo ', ';
    }
    /*
    if($num != 10){
        echo $num.', ';        
    } else {
        echo "$num.";
    }
     */

    $num+=1;
}

// Esempio: Tabella moltiplicazioni
echo "<br><hr/>";

if(isset($_GET['numero'])){
    $numero=(int)$_GET['numero'];
} else{
    $numero=1;
}
echo "<h3>Tabella di moltiplicazione del $numero</h3>";
var_dump($numero);
$c=1;
while ($c<=10){
    echo "<p>$numero x $c = ".($numero*$c)."</p>";
    $c++;
}
/*
 */
