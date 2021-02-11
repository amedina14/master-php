<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Stampare</title>
    </head>
    <body>
        <h1>Master PHP <?php echo "AdrianMedina.it"; ?></h1>

        <?= "Corso più grande di php" ?>

        <?php
        // Titotlo della sezione
        echo '<h3>Lista di videogiochi:</h3>';
        
        /*
         * Lista di videogiochi moderni.
         * Commento multilinea
         */
        echo "<ul>"
        . "<li>GTA</li>"
        . "<li>Fifa 21</li>"
        . "<li>Falle order</li>"
        . "<li>Skyrim</li>"
        . "</ul>";

        echo '<p>Categoria: ' . 'Giochi popolari.' . ' 2021</p>';

        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        ?>        
    </body>
</html>

