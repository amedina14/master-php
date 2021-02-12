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


