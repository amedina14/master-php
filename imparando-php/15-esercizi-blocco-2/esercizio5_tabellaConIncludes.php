<html>
    <head>
        <title>Tabella videogiochi</title>
    </head>
    <body>

        <!-- Header -->
        <header 
            style="display: block; width: 80%; height: 70px; background-color: navy; margin: 0px auto; margin-bottom: 20px;">
            <h1 style="color: white; text-align: center; line-height: 65px;">Tabella videogiochi</h1>
        </header>

        <div class="content" 
             style="display: block; width: 80%; min-height: 500px; background-color: lavender; margin: 0px auto;">

            <?php
            /*
             * Creare una array con il contenuto della tabella:
             * Azione       Avventura       Sport
             * GTA          Fallen Order    Fifa 21
             * COD          Minecraft       GT Sport
             * TLOU 2       Skyrim          Rocket League
             * 
             * Ogni riga dev'essere in un modulo searato(includes).
             */


            echo '<br>';
            $tabella = array(
                "azione" => ["GTA", "COD", "TLOU 2"],
                "avventura" => ["Fallen Order", "Minecraft", "Skyrim"],
                "sport" => ["FIFA 21", "GT Sport", "Rocket League"],
            );

            $categorie = array_keys($tabella);
//foreach ($tabella as $key => $value) {
//    $categorie[] = $key;
//}
            ?>

            <!-- Contenuto - tabella -->
            <table border="1">
                <?php require_once './esercizio5_includes/table_header.php'; ?>

                <?php require_once './esercizio5_includes/prima_riga.php'; ?>                

                <?php require_once './esercizio5_includes/seconda_riga.php'; ?>                

                <?php require_once './esercizio5_includes/terza_riga.php'; ?>                

            </table>



        </div>
    </body>
</html>
