<!DOCTYPE HTML>
<html>
    <head lang="it">
        <meta charset="utf-8"/>
        <title>cookies</title>
    </head>
    <body>
        <?php
        /*
         * File per vedere il contenuto delle cookies.
         * Per visualizzarle si deve usare la varibile superglobale, ed array associativo:
         * $_COOKIE[''];
         */

        if (isset($_COOKIE['mycookie'])) {
            echo '<h2>' . $_COOKIE['mycookie'] . '</h2>';
        } else {
            echo '<p>mycookie non esiste</p>';
        }
        if (isset($_COOKIE['oneyear'])) {
            echo '<h2>' . $_COOKIE['oneyear'] . '</h2>';
        } else {
            echo '<p>oneyear cookie non esiste.</p>';
        }
        ?>
        
        <p><a href="cancellare_cookies.php">Cancellare cookies</a></p>
        <p>
            <a href="creare_cookies.php">Creare cookies default</a>
        </p>
        
    </body>
</html>