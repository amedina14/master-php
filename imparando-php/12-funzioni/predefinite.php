<?php

/* 
 * Funzion predefinite
 */

//Debug 
$nome="Adrian Medina";
echo 'var_dump($nome): ';
var_dump($nome);

// Date
echo '<hr/>date(\'d-m-Y\'): '.date('d-m-Y').'<br/>';
echo '<p>time(): '.time().'</p>'; //data numerica in formato unix che non si ripete mai.

//Matematiche
echo "<hr/>Radice quadrata di 10: ".sqrt(10);
echo '<p>Numero aleatorio tra >=10 e <=40, rand(10,40): '.rand(10,40).'</p>';
echo '<p>Pi, pi(): '.pi().'</p>';
echo '<p>Arrotondare, round(7.891234, 2): '.round(7.891234, 2).'</p>';
echo '<p>Pi: '.pi().'</p>';

//Più funzioni predefinite
//Ottieni tipo gettype()
echo "<hr/>";
$num=14.1407;
echo '<p>Ottieni tipo dato: '.gettype($nome).'</p>';

//is_string(): Verifica tipo specifico
if(is_string($nome)){
    echo "Variabile $nome di tipo string";
} elseif (is_float($nome)) {
    echo "Variabile $nome di tipo float";
}
if (is_float($num)) {
    echo "<p>Variabile $num di tipo float</p>";
}

//isset(): Verifica variabile se è esistente
if(isset($eta)){
    echo '<p>La variabile esiste</p>';
} else {
    echo '<p>Variabile eta non esiste</p>';
}

//trim(): toglie spazzi
echo '<hr/>';
$varTrim="    toglie spazzi laterali con trim()    ";
echo trim($varTrim).'<br>';
echo var_dump(trim($varTrim)).'<br>';
echo var_dump($varTrim).'<br>';

// Elimina variabili o indici di array
echo '<hr/>';
$year="2021";
unset($year); //elimina
echo $year;   //undefined

//Verifica variabile se è vuota
echo '<hr/>';
$varVuota="";
if(!empty($varVuota)){
    echo '<p>La variabile è piena</p>';
} else{
    echo '<p>La variabile è vuota</p>'; //"", null, undefined, false;
}

//Conta caratteri/lunghezza di string
echo '<hr/>';
$lunghezza="DnaUmano911_";
echo 'Lunghezza della parola: '.strlen($lunghezza);

// Trova la posizione
echo '<hr/>';
$frase = "La vita è bella";
echo $frase;
echo '<p>La parola \'vita\' si trova nella posizione: '.strpos($frase, "vita").'</p>';

// Rimpiazzare contenuto su una string
echo '<hr/>';
echo str_replace('vita', 'tecnologia', $frase);

// Maiuscola e minuscola
echo '<hr/>';
echo '<p>Converte minuscola: '.strtolower($frase).'</p>';
echo '<p>Converte maggiuscola: '.strtoupper($frase).'</p>';
