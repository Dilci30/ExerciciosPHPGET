<?php
/*Faça um algoritmo em PHP que receba por URL um número e exiba a tabuada do mesmo. */

$tabuada = $_GET['tabuada'];

for ($x=1; $x<10; $x++){
    echo "$x x $tabuada = ". ($tabuada*$x). "<br>";
}
?>