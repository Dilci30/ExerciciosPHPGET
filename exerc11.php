<?php
/* Faça um algoritmo em PHP que receba por URL uma string e:
a. verifique se foi recebido algo, ou seja, diferente de vazio.
b. verifique se a string possui mais que dois caracteres
c. converta essa string para minusculo;
d. remova qualquer tipo de espaço;
e. crie um diretório com o nome dessa string;
f. defina as permissões desse novo diretório para 0777 */

$nome= $_GET['nome'];

if (isset($nome)) {
    echo "Variable é valida"; 
  }

  echo strlen($nome);

  echo strtolower($nome). "<br>";

  
   // remover espaço echo trim($nome);

 
if (!file_exists('php/nome')) {
    mkdir('php/nome', 0777, true);
}

?> 
