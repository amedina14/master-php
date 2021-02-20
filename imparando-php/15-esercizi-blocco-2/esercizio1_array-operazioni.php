<?php

/*
 * Esercizio 1: array con 8 num interi e faccia le seguente cose:
 * - Percorrere e stamparlo
 * - Ordinarlo e stamparlo
 * - Mostrare la sua lunghezza
 * - Cercare un elemento concreto (extra, fare con GET)
 */


$array1 = array(
    5, 2, 8, 4, 7, 17, 11, 3
);

function stampaArray($arr) {
    $risultato = "";
    foreach ($arr as $value) {
        $risultato .= $value . '<br>';
    }
    return $risultato;
}

function bubble_sort($array1) {
    $n = count($array1);
    do {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($array1[$i] > $array1[$i + 1]) {
                $appoggio = $array1[$i];
                $array1[$i] = $array1[$i + 1];
                $array1[$i + 1] = $appoggio;
                $swapped = true;
            }
        }
        $n--;
    } while ($swapped);
    return $array1;
}

echo '<h3>Esercizio 1: Array</h3>';

// Percorrere e stampare
echo '<p><b>Percorrere e stampare</b></p>';
foreach ($array1 as $value) {
    echo 'Elemento: ' . $value . '<br>';
}

// Ordinarlo e stamparlo
echo '<h3>Ordinarlo e stamparlo: Bubble Sort e sort($array)</h3>';
//$array_ordinato = sort($array1); // non funziona
/*
 * Bubble Sort
  5 2 8 4 7 17 11 3
  2 5 4 7 8 11  3 17
  2 4 5 7 8  3 11 17
  2 4 5 7 3  8 11 17
  2 4 5 3 7  8 11 17
  2 4 3 5 7  8 11 17
  2 3 4 5 7  8 11 17
 */
//sort($array1);
//echo stampaArray($array1);

echo '<b>Ordinando manualmente usando algoritmo bubble sort</b><br>';
$nw_arr_bbsort = bubble_sort($array1);
echo stampaArray($nw_arr_bbsort).'<br>';
print_r($nw_arr_bbsort);

echo '<br><br><b>Ordinando usando la funzione sort()</b><br>';
$arr_automatic_sort = [];
foreach ($array1 as $value) { 
    /* 
     * Ho dovuto aggiungere con for gli elementi al nuovo array
     * per poter applicar sort indipendentemente dall'array
     * originale.
     */
    array_push($arr_automatic_sort,$value);
}
sort($arr_automatic_sort);
echo stampaArray($arr_automatic_sort).'<br>';
//$arr_automatic_sort[] = sort($array1);
var_dump($arr_automatic_sort);

echo '<br><br><b>Ordine originale:</b><br>';
echo stampaArray($array1);
/*
$array_reverse = [];
for ($i = 0; $i < $n; $i++) {
    
}

  foreach ($array1 as $val){
  echo $val.'<br>';
  }
 */


// Mostrare la sua lunghezza
echo '<p><b>Mostrare la sua lunghezza</b></p>';
$num_elementi = count($array1);
echo "<p>Lunghezza dell'array $num_elementi elementi</p>";

// Cercare un elemento concreto: 17 ed 8
echo '<p><b>Cercare un elemento concreto: 17 ed 8</b></p>';
echo "Cerca automaticamente posizione elemento 17:";
$posizone = array_search(17, $array1);
echo "<p>17 è nella posizione $posizone</p>";

$posizione2 = array_search($num_elementi, $array1);
if (!empty($posizione2)) {   //cerca 8 dentro l'array1
    echo '8 è dentro l\'array';
} else {
    echo 'Non c\'è 8 dentro array1';
}

// Cerca manualmente posizione elemento 8
echo "<br><br>Cerca manualmente (for) posizione elemento 8<br>";
for ($i = 0; $i < count($array1); $i++) {
    if ($array1[$i] == 8) {
        echo "8 è nella posizione " . array_search(8, $array1) . "<br>";
        /*
          echo 'Con Array1 ordinato ascendentemente,<br>'
          . '8 è nella posizione: <b>' . $i . '</b><br>';
         */
    }
}

// Cerca elemento ricevuto con GET
echo '<h3>Cercare un elemento ricevuto con GET</h3>';
if(isset($_GET['numero'])){
    $cerca = $_GET['numero'];
    
    $position = array_search($cerca, $array1);
    $position_sort = array_search($cerca, $arr_automatic_sort);
    
    if(!empty($position)){
        echo "<p>$cerca si trova nella posizione $position nell'array originale.</p>";
        echo "<p>$cerca si trova nella posizione $position_sort nell'array ordinato.</p>";
    } else {
        echo "$cerca Non esiste nell'array.";
    }
} else {
    echo 'Inserire un valore GET a numero';
}

