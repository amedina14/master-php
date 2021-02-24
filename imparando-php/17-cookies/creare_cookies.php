<!DOCTYPE HTML>
<html>
    <head lang="it">
        <meta charset="utf-8"/>
        <title>cookies</title>
    </head>
    <body>
        <?php
        /*
         * Cookie:
         * File che si salva sul pc utente che visita la web con il fine di salvare dati
         * o tracciare certo tipo d'informazione o comportamento dello stesso sulla web.
         * Nel server si salva un riferimento della cookie, ma quasi tutta l'informazione
         * si salva sul file cookie del browser e poi si invia al server.
         * 
         * Salva info dell'utente, logging, ecc.
         */

        // Creare cookie.
        // setcookie("nome","valore che solo può essere testo.", capacita, indirizzo, dominio);
        // cookie basica
        setcookie("mycookie", "valore del mio biscotto");

        // cookie con scadenza
        setcookie("oneyear", "questa cookie durerà solo 365 giorni", time() + (60 * 60 * 24 * 365));

        header('Location:visualizza_cookies.php');

        echo '<p>Le cookie sono state create.</p>';

        // un altra variante di cookie è quella che va ad aggire su 
        // tutto il server, su tutta la cartella de server e su tutti i progetti del
        // server o sotto lo stesso dominio.
        ?>

        <!--
        <a href="visualizza_cookies.php">Visualizza i biscotti</a>
        -->

    </body>
</html>