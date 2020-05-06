<?php
/*Faça um algoritmo em PHP que receba por URL um número e o sistema sorteia outro, verifique se o número sorteado é igual ao da URL, se sim exiba 
"Você acertou o número". Exiba também o número digitado e o número sorteado. Utilize a função rand().Verifique se o que está na URL é um número*/

$a= $_GET['num1'];
$b= rand(2,99);
echo "seu numero da sorte é $b"


if ($a = $b){
    echo "Voce acertou o numero". $a = $b;
    } elseif {
        echo "o numero digitado é ". $a
    } else{
        echo "o numero sorteado é ". $b
    }
        if (is_numeric($a)){
            echo ($a). " é numeros";
      
        ?>