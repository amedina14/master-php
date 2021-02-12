<?php

// Operatori Aritmetici
echo "<p><b>Operatori Aritmetici</b></p>";
$x = 65;
$y = 33;

echo 'somma: '.$x.' + '.$y.' = '.($x + $y).'<br>';
echo 'resta: '.($x - $y).'<br>';
echo 'moltiplicazione: '.($x * $y).'<br>';
echo 'divisione: '.($x / $y).'<br>';
echo 'modulo/resto: '.($x % $y).'<br>';

// Incremento e decremento
echo "<p><b>Incremento e decremento</b></p>";
$year = 2021;
$year++;
echo "Anno successivo: $year <br>";
$year--;
echo "Anno attuale: $year <br>";
--$year;
echo "Anno precedente: $year <br>";
echo "<p>++\$year pre-incremento | --\$year pre-decremento</p>";