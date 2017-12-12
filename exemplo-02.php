<?php

$anoNascimento = 1980;

$nomeCompleto = "Alexandre Carvalho";

echo $nomeCompleto;
echo "<br/>";


echo $nomeCompleto. " ".$anoNascimento;
exit;

unset($nomeCompleto);

if (isset($nomeCompleto)){

	echo $nomeCompleto;
}


?>