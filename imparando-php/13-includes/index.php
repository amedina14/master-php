<!-- 
    Require: Non carica la pagina se non riceve bene il file.
    Include: Carica la pagina con errori anche se non ha ricevuto 
    bene il file/importazione.

    require_once: Non permette di ripetere l'importazione/elemento.
-->
<?php require_once './includes/header.php'; ?>

<!--Contenuto-->
<div>
    <h2>Pagina Home</h2>
    <p>Testo di prova</p>
</div>
<?php
var_dump($nome);
?>

<?php include_once './includes/footer.php'; ?>
