<?php
/*
 * Cancellare cookies
 * Per cancellare bisgno anche farle scadere,
 * non basta solo il unset().
 */

if (isset($_COOKIE['mycookie'])) {
    unset($_COOKIE['mycookie']);
    setcookie('mycookie', '', time() - 100);
    echo '<p>La cookie \'mycookie\' è stata cancellata</p>';
} else {
    echo 'La cookie \'mycookie\' non esiste';
}

if (isset($_COOKIE['oneyear'])) {
    unset($_COOKIE['oneyear']);
    setcookie('oneyear', '', time() - 100);
    echo '<p>La cookie \'oneyear\' è stata cancellata.</p>';
} else {
    echo '<p>La cookie \'oneyear\' non esiste </p>';
}

header('Location:visualizza_cookies.php');
?>

<p>
    <!--<a href="visualizza_cookies.php">visualizza cookies</a>-->
</p>
