<?php

/* 
 * Chiude la sessione
 */

session_start();

echo 'logout eseguito.';

session_destroy();

