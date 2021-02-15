<?php

/*
 * Stampare tutte le tabelline e mostrarle su una tabella HTML
 */


echo '<table border="1" width="900px" height="30px">';
echo '<tr align="center">';
for ($i = 1; $i <= 10; $i++) {
    echo "<th>Tabella del $i </th>";
}
echo '</tr>';
echo '<tr>';
for ($i = 1; $i <= 10; $i++) {
    echo '<td>';
    for ($j = 1; $j <= 10; $j++) {
        echo "$j x $i = " . ($i * $j).'<br>';
    }
    echo '</td>';
}
echo '</tr>';
echo '</table>';
