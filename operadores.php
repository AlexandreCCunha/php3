<?php
//  = operador de atribuição
$nome = "Alexandre";
// . concatenação
echo $nome." Cunha<br>";
// .= composto na variavel (Alexandre "." Campos)
$nome .= " Campos<br>";

echo $nome;

$valorTotal = 0;

// += vai somando os valores da variavel (ex: 0+100+25 = 125)

$valorTotal += 100;

$valorTotal += 25; 

// -= subtrai a variavél
$valorTotal -= 25;

//*= multiplica a operação
$valorTotal *= 0.9;

echo $valorTotal."<br>";

// operadores aritiméticos

$a = 10;
$b = 2;

echo $a + $b."<br>";

echo $a - $b."<br>";

echo $a * $b."<br>";

echo $a / $b."<br>";

echo $a % $b."<br>";

echo $a ** $b."<br>";

// operadores de comparação

$c = 30.0;

$d = 30;

var_dump($c > $d);


echo "<br>";

var_dump($c < $d);

echo "<br>";

// comparador de igualdade de valor

var_dump($c == $d);

// igual em tipo e valor igualdadae de identidade
echo "<br>";

var_dump($c === $d);

echo "<br>";

var_dump($c != $d);

echo "<br>";

// faz comparação de igualdade
var_dump($c !== $d);



//operadores do PHP

$e = 50;

$f = 35;

echo "<br>";

var_dump($e <=> $f);


// os dois (??) não mostra o que é nulo. ex: mostra apenas o 12 valomer $c.

$g = NULL;

$h = NULL;

$i = 12;

echo "<br>";

echo $g ?? $h ?? $i;


// Variaveis incrementais e decrementais.

// incremento

$j = 13;

echo "<br>";


echo $j++;

// o echo abaixo mostra na tela o valor já incrementado

echo "<br>";

echo $j;

echo "<br>";

echo ++$j;

echo "<br>";

// faz o valor decrementar
echo --$j; 

//precedencia de execeução ( no site do php tem a tabela de precedencia)

$resultado = 10 + 3 / 2;

echo "<br>";

var_dump ($resultado);

// para forçar a soma é só colocar o valor primeiro entre parentese

$resultado2 = (10 + 3) / 2;

echo "<br>";

var_dump($resultado2);

// argumentos logicos &&(E); || (OU)

$resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

echo "<br>";

var_dump($resultado3); 




?>