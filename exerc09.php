<?php
/* Faça um algoritmo em PHP que receba por URL uma string, encontre o número total de caracteres desta e imprima todos os números que existem entre 0 e 
o número total de letras, exemplo:
• string = “Gil Eduardo de Andrade”
• total_caracter = 22
• Imprime: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 */


$nome = $_GET['nome'];

echo $nome;

echo strlen($nome);

// imprimir numeros 
?>