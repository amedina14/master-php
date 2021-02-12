<?php

// Variabili superglobali


// Variabili del server
echo "<h2>";
echo 'Variabili del server';
echo '</h2>';

echo '<ul>'
.'<li>SERVER_ADDR '.$_SERVER['SERVER_ADDR'].'</li>'//prende l'ip del mio server
.'<li>SERVER_NAME '.$_SERVER['SERVER_NAME'].'</li>'
.'<li>SERVER_PORT '.$_SERVER['SERVER_PORT'].'</li>'
.'<li>SERVER_ADMIN '.$_SERVER['SERVER_ADMIN'].'</li>'
.'<li>SERVER_PROTOCOL '.$_SERVER['SERVER_PROTOCOL'].'</li>'
.'<li>SERVER_SIGNATURE '.$_SERVER['SERVER_SIGNATURE'].'</li>'
.'<li>SERVER_SOFTWARE '.$_SERVER['SERVER_SOFTWARE'].'</li>'
.'<li>HTTP_USER_AGENT '.$_SERVER['HTTP_USER_AGENT'].'</li>'
.'<li>REMOTE_ADDR '.$_SERVER['REMOTE_ADDR'].'</li>' //ip del ciente
.'</ul>';

