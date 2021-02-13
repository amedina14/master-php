<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Form php</title>
    </head>
    <body>
        <h1>Form in PHP</h1>
        <form method="GET" action="ricevere.php">
            <p>
            <label for="nome">Nome</label>
            <input name="nome" placeholder="Inserisci il tuo nome.." />
            </p>

            <p>
            <label for="cognome">Cognome</label>
            <input name="cognome" placeholder="Inserisci il tuo cognome.." />
            </p>

            <p>
            <label for="descrizione">Descrizione</label>
            <input name="descrizione" placeholder="Inserisci descrizione.." />
            </p>
            
            <input type="submit" value="invia"/>
        </form>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

