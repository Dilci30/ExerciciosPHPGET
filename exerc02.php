<?php
/*Faça um algoritmo em PHP que receba por URL dois números, exiba a soma, a
multiplicação e a divisão dos dois números.Verifique se o que está na URL é um
número. */


$a= $_GET['num1'];
$b= $_GET['num2'];

echo "exibindo os numeros"

function soma ($a, $b);
{    echo "a soma é ". $a + $b;
    }
  function multiplicar ($a, $b){
    echo "a multiplicação é  ". $a * $b;
    }
   function dividir ($a, $b){
        echo "a divisão é  ". $a / $b;
    }

    if (is_numeric($a,$b)){
      echo ($a, $b). " são numeros";

   ?>