<?php

$numeros = array_values($_GET);
$soma = 0;
$i = 0;
while ($i < count($_GET)) {
	$soma += $numeros[$i];
	$i++;
}
echo $soma;