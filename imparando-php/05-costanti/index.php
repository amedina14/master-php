<?php

// Costanti
// Contenitore che non può alterare/cambiare il suo contenuto.

define('nome', 'Adrian Medina');
define('web', 'adrianmedinadeveloper.it');

echo '<p><strong>Costanti:</strong></p>';
echo '<p><strong>'.nome.'</strong></p>';
echo '<p>'.web.'</p>';

// Variaili
echo '<br><p><strong>Variabili:</strong></p>';
$web = "arandom.000webhostapp.com/home";
echo "web: $web";
$web = "arandom.000webhostapp.com/pagina1";
echo "<br>web: $web";


// Costanti predefinite
echo '<br><p><b>Costanti predefinite</b></p>';
echo '<p>'.PHP_VERSION.'</p>';
echo '<p>'.PHP_OS.'</p>';
echo '<p>'.PHP_EXTENSION_DIR.'</p>';
echo '<p>'.__DIR__.'</p>';
echo '<p>'.__FILE__.'</p>';
echo '<p>'.__LINE__.'</p>';
function nomeFunzione(){
    echo '<p>Nome della funzione: '.__FUNCTION__.'</p>';
}
nomeFunzione();


