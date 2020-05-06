<?php
//Faça um algoritmo em PHP que receba por URL um número e exiba o antecessor e o sucessor desse número. Verifique se o que está na URL é um número

$a= $_GET['numero'];
echo "exibindo os numeros"

if ($a . + 1){
    echo "o sucessor é ". $a + 1;
    }
    elseif ($a . - 1){
    echo "o antecessor é  ". $a - 1;
    }
    
      if (is_numeric($a)){
        echo $a." é numerico";
   ?>