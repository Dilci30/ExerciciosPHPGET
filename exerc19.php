<?php
/* Faça um algoritmo PHP que receba por URL uma string, exiba essa string quebrando linha a cada 5 caracteres, veja exemplo:
• Entrada = O SENAC é a melhor escola técnica.
• Saída: O SEN
AC é
a mel */ 

$frase= $_GET['frase'];

$frase = wordwrap($frase, 5, "<br />\n");

echo $frase;

?>