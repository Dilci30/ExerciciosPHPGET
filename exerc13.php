<?php

/* Faça um algoritmo que receba por URL um número com ponto flutuante(2.333):
a. exiba o número aredondado para o valor maior mais próximo:
i. caso o número seja 2.333 deve exibir 3
b. exiba o número aredondado para o valor menor mais próximo:
i. caso o número seja 2.333 deve exibir 2 */ 

$a= $_GET['num'];

echo(ceil($a) . "<br>");

echo(round($a) . "<br>");

?>