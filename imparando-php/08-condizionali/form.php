<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <header>
            <a href="index.php">Home</a>
            <br>
        </header>
        <div class="content">
            <form method="POST" action="index.php">
                <p>
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" placeholder="Inserisci nome"/>
                </p>
                <p>
                    <label for="eta">Eta</label>
                    <input name="eta" type="text" placeholder="Inserisci eta"/>
                </p>
                <p>
                    <label for="citta">Citta</label>
                    <input name="citta" type="text" placeholder="Inserisci citta"/>
                </p>
                <p>
                    <label for="continente">Continente</label>
                    <input name="continente" type="text" placeholder="Inserisci continente"/>
                </p>
                
                <p>
                    <input type="submit" value="Invia"/>
                </p>
            </form>
        </div>
    </body>
</html>

<?php
?>
