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

// Operatore d'assegnazione
echo "<p><b>Operatori d'assegnazione</b></p>";
$eta=18;
$eta_alterata = null;
$eta_alterata += $eta;
echo 'età originale: '.$eta;
echo '<br>età più uno (18+1): '.$eta_alterata+=1; //18+1=19
echo '<br>età originale (19-2) meno uno: '.$eta_alterata-=2; //19-2=17
echo '<br>età originale (18*5) moltiplicata per cinque: '.$eta*=5; //18*5=90
echo '<br>età alterata (17-90+20), più due: '.$eta_alterata-=$eta+20; //17-90=-73+20=93
echo '<br>età originale (90/5), diviso cinque: '.$eta/=5; //90*5=18


