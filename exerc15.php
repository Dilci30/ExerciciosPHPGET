<?php
/* Faça um algoritmo que receba por URL uma string e:
a. exiba a string em texto plano;
b. exiba a string em forma de HASH 512 */ 

$nome= $_GET['nome'];

echo htmlentities($nome)."<br>";

echo $nome.sha1($nome, TRUE)."<br>";

?>