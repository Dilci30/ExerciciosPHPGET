<?php
/* Faça um algoritmo em PHP que receba por URL uma string e:
a. verifique se foi recebido algo, ou seja, diferente de vazio.
b. verifique se a string possui mais que dois caracteres
c. converta essa string para minusculo;
d. remova qualquer tipo de espaço;
e. verifique se existe um diretório com o mesmo nome da string:
i. caso exista remova o diretório e apresente uma mensagem de
sucesso
ii. caso não exista apenas exiba uma mensagem de erro */

$nome= $_GET['nome'];

if (isset($nome)) {
    echo "Variable é valida"; 
  }
  echo strlen($nome);

  echo strtolower($nome);

//remover espaços


/*if (!file_exists('nome')) 
else if { rmdir('nome')
    echo "excluido com sucesso";
} else  {
    echo "erro ao excluir"
} */

?>