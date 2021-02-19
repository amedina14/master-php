<?php

/*
 * Array
 * Insieme di dati/variabili sotto un unico nome.
 * Per accedere ai dati al suo interno si usano gli indici.
 */

echo '<h2>Arrays</h2>';

// Definizione di variabili e arrays
$film = "Batman";
$films = array('Batman', 'Spiderman', 'Il signore degli anelli');
$cantanti = ['2pac', 'Drake', 'JLoe'];


// Array associativo (Map, dizionario);
/*
 * Quando si ricevono parametri per l'url vengono 
 * contenuti in un array associativo
 */
$persone = array(
    array(
        "nome" => "Adrian",
        "cognome" => "Medina",
        "web" => "adrianmedina.it"
    ),
    ['nome' => 'Lucas', 'Cognome' => 'Bros', 'web' => 'lucasbros.com']
);
echo '<p>Persona 1 Nome: ' . $persone[0]["nome"] . '</p>';
echo '<p>Persona 2 Nome: ' . $persone[1]["nome"] . '</p>';


// Referenziamento e debug dei array
var_dump($films);
echo '<br><hr/>';
echo $films[1];

echo '<br><br>';
var_dump($cantanti);
echo '<br>';
echo $cantanti[2];

// Percorrere l'array
echo '<br><hr/><b>Iterare o percorrere array.</b>';
echo '<ul>';
echo '<p>Con for films:</p>';
for ($i = 0; $i < count($films); $i++) {
    echo '<li>' . $films[$i] . '</li>';
}
echo '</ul>';

echo '<ul>';
echo '<p>Con foreach cantanti:</p>';
foreach ($cantanti as $cantante) {
    echo '<li>' . $cantante . '</li>';
}
echo '</ul>';

// Array multidimensionali
echo '<br><hr/><b>Array multidimensionali</b>';
$contatti = array(
    array(
        'nome' => 'Ernie',
        'email' => 'ernie@mail.com'
    ),
    array(
        'nome' => 'Ron',
        'email' => 'ron@mail.com'
    ),
    array(
        'nome' => 'Terry',
        'email' => 'terry@mail.com'
    ),
);
//var_dump($contatti);

foreach ($contatti as $key => $contatto) {
    echo '<p>Nome: ' . $contatto['nome'] .'<br>'
        . 'Email: '. $contatto['email'] . '</p>';
}

