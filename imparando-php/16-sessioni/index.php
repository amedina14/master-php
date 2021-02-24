<?php

/* 
 * Sessioni: Immagazzina e persiste dati del utente mentre si naviga in un sito 
 * web fino alla chiusura della sessione o della pagina.
 */

// Iniziare la sessione
session_start();

//variabile di sessione
$variabile_normale = "testo di prova<br>";

//variabile di sessione
$_SESSION['var_persist'] = "Ciao sono una variabile superglobale della "
        . "sessione(1) attiva";

echo $variabile_normale;
echo $_SESSION['var_persist'];
