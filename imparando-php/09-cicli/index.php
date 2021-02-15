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

// DO WHILE
/*
do{
    // blocco istruzioni    
} while(condizione);
 */
echo '<hr/><h3>Do While: </h3>';
$eta = 18;
$c=1;
$flag=false;
do{
    echo "Persona $c. Hai accesso alla lobby<br>";
    if($eta>=18){
        $flag=true;
    }
    if($flag){
        echo "Sei maggiorenne. Hai accesso al posto riservato persona $c<br><br>";
    }
    $c++;
}while($eta >= 18 && $c<10);




