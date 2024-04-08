<?php

$nome = "Milena";
$sobrenome = "Rodrigues";
$idade = 15;
$numero = 23058;
$dia = 22;
$valordia = 90.35;
$salario  = "";
$salario = $dia * $valordia;

//calculadora php

$a = 10;
$b = 20;
$soma;
$subtração;
$multiplicacao;
$divisao;


echo ("Nome: " .$nome. "</br>");
echo ("Sobrenome: " .$sobrenome. "</br>");
echo ("Nome completo: " .$nome. " ".$sobrenome."</br>");
echo ("Idade: " .$idade. "</br>");
echo ("Número: " .$numero. "</br>");
echo ("Dia: " .$dia. "</br>");
echo ("Valor dia: " .$valordia. "</br>");
echo ("Salário: " .$salario. "</br>");

$soma = $a + $b;
$subtração = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;

echo ("" .$soma. "<br>");
echo ("" .$subtração. "<br>");
echo ("" .$multiplicacao. "<br>");
echo ("" .$divisao. "<br>");

//var dump 

var_dump(5);
var_dump("Milena");
var_dump(3.14);
var_dump(true);
var_dump({2, 3, 56});
var_dump(NULL);



?>