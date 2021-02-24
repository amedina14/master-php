<?php

/* 
 * Richiamare la variabile della sessione.
 * Bisogna sempre avviare la sessione sul modulo per utilizzarla come risorsa.
 */

session_start();

echo $_SESSION['var_persist'];

