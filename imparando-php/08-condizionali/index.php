<?php

/* 
 * Condizionali
 * 1. if
 * 2. else
 * 
 */

/*
if(condizione){
    istruzione
} else {
    altra istruzione
}
// Operatori di comnfronto
 * == uguale: stesso valore;
 * === identico: stesso tipo di dato e valore;
 * != diverso
 * <> diverso
 * !== non identico
 * < minore che
 * > maggiore che
 * <= minore uguale
 * >= maggiore uguale
 * 
 */
echo '<hr/><p>Verifica del colore</p>';

$colore="rosso";
if ($colore=='rosso'){
    echo "Il colore è $colore";
} else{
    echo 'Il colore NON è rosso';
}

/*
$passato="ieri";
$presente="oggi";
$futuro="domani";
$giorno="";
*/
$urgente=4;
$alta=3;
$media=2;
$bassa=1;
$priorita=4;

//<script>const p = prompt("Inserisci priorita")*1;</script>
echo '<br><hr/><p>Verifica della priorità</p>';

if($priorita<$urgente){
    if($priorita<$alta){
        if($priorita<$media){
            echo 'Priorita bassa';
        }
        else {
            echo 'Priorita Media';
        }
    } else {
        echo 'Priorita Alta!!';
    }
} else {
    echo 'Priorita <b>URGENTE!</b>';
}

echo '<br><hr/><p>Verifica dell\'anno</p>';
//esercizietto: verifica se l'anno è maggiore, minore, diverso e uguale senza ops. logici
$year=2020;

/* Soluzione compatta: se l'anno è diverso, può essere minore o maggiore, 
 altrimenti è uguale.
 */
if($year<>2021){
    echo '<p>L\'anno è <b>diverso</b> del 2021</p>';
    if ($year<2021){
        echo '<p>L\'anno è <b>minore</b> del 2021</p>';        
    } else {
        echo '<p>L\'anno è <b>maggiore</b> del 2021</p>';
    }
} else{
    echo 'L\'anno è <b>uguale</b> al 2021';    
}

/* 
 * Esempio 4
 */
function verificaDati($nome,$eta,$citta,$continente,$maggioriaEta){//funzione senza ritorno    
    if($eta>=$maggioriaEta){
        echo "$nome è maggiorenne";
        if ($continente=="Europa"){
            echo '<br>è della città: '.$citta;
        } else {
            echo '<br>'.$nome.' Non è europeo';
        }
    } else {
        echo "$nome è minorenne";
    }
}

echo '<br><hr/><p>Esempio 4: Dati di persona</p>';
echo '<p><a href="form.php">Form</a></p>';

$maggioriaEta=18;

// $nome && $eta && $citta && $continente
$nome= "Adrian Medina";
$eta= 24;
$citta= "Foligno";
$continente= "Europa";

verificaDati($nome, $eta, $citta, $continente, $maggioriaEta);

/*
try{
    $nome= $_POST['nome'];//"Adrian Medina";
    $eta=$_POST['eta'];//24;
    $citta=$_POST['citta'];//"Foligno";
    $continente=$_POST['continente'];//"Europa";
} catch (ErrorException $ex){
    echo 'Errore';
}
*/
//verificaDati($nome, $eta, $citta, $continente, $maggioriaEta);

// Esempio 5
function giornoDellaSettimana($giorno){
    $ris="";
    if($giorno == 1){
        $ris= "Lunedi";
    } elseif ($giorno == 2){
        $ris= 'Martedi';
    } elseif ($giorno == 3) {
        $ris= 'Mercoledi';
    } elseif ($giorno == 4){
        $ris= 'Giovedi';
    } elseif ($giorno == 5) {
        $ris= 'Venerdi';
    } else {
        $ris= 'Weekend';
    }
    return $ris;
}

echo '<br><hr/>Esempio 5<br>';
$giorno = 7;
$result = giornoDellaSettimana($giorno);
echo "<p>$result</p>";

