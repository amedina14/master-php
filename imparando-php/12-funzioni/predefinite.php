<?php

/* 
 * Funzion predefinite
 */

//Debug 
$nome="Adrian Medina";
echo 'var_dump($nome): ';
var_dump($nome);

// Date
echo '<hr/>date(\'d-m-Y\'): '.date('d-m-Y').'<br/>';
echo '<p>time(): '.time().'</p>'; //data numerica in formato unix che non si ripete mai.

//Matematiche
echo "<hr/>Radice quadrata di 10: ".sqrt(10);
echo '<p>Numero aleatorio tra >=10 e <=40, rand(10,40): '.rand(10,40).'</p>';
echo '<p>Pi, pi(): '.pi().'</p>';
echo '<p>Arrotondare, round(7.891234, 2): '.round(7.891234, 2).'</p>';
echo '<p>Pi: '.pi().'</p>';



