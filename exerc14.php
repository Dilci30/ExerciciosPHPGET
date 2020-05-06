<?php
/* Faça um algoritmo que receba por URL um número monetário com notação Inglesa com 4 casas na decimal (1234.3435):
a. formate esse número para a notação Brasileira com somente duas casas na decimal separando a milhar com “.”, exemplo 1.234,34 */

$a= $_GET['moeda'];

$formattedNum = number_format($a, 2);
echo number_format($a,2,",",".");


?> 