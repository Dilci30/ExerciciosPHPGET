<?php
/* Faça um algoritmo em PHP que receba por URL dois números, inicial e final, exiba todos os números pares que estão no intervalo dos dois números. Os dois
 campos devem ser de preenchimento obrigatório e numérico, caso contrário exiba um erro. */

 $a= $_GET['num1'];
 $b= $_GET['num2'];

 for($a = 0; $a <= 100; $a ++){

    $resto = $i % 2;
	if($resto=="0")
	{
		echo "Numeros pares:".$a."<br>";
	} else ($b = 0; $b <= 100; $b ++){

        $resto = $i % 2;
        if($resto=="0")
        {
            echo "Numeros pares:".$b."<br>";
        }

   
}
  ?>