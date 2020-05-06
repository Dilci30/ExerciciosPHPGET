<?php
/*Faça um algoritmo em PHP que receba por URL quatro notas de um aluno, calcule e imprima a média aritmética das notas e a mensagem de aprovado para 
média superior ou igual a 7.0 ou a mensagem de Exame para média inferior a 7.0 e maior ou igual a 5.0 ou a mensagem de Reprovado para média menor 
que 5.0 . Todas as notas repassadas por URL devem ser numéricas entre ZERO e DEZ */

$n1= $_set['nota1'];
$n2= $_set['nota2'];
$n3= $_set['nota3'];
$n4= $_set['nota4'];

function media() {
    $media = $n1 + $n2 + $n3 + $n4) / 4;
    return $media;

if ($media >= 7){
    echo "aluno aprovado";
}
    elseif (($media < 7) && ($media >= 5)):
    echo "aluno em exame";
} else ($media <= 5){
    echo "aluno reprovado"
}
?>