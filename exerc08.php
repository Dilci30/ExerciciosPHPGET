<?php
/* Faça um algoritmo em PHP que receba por URL o seu nome e o sistema conte quantas letras tem seu nome e exibe em tela, exiba também o nome em ordem
inversa e converta todas as letras para maiúsculas. Obrigue o nome possuir no mínimo 5 letras. */

$nome= $_GET['nome'];

echo strlen($nome) . "<br>";

echo strrev($nome) . "<br>";

echo strtoupper($nome). "<br>";

//faltou o minimo de letras

?>