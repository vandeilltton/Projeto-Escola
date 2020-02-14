<?php

$n = rand(0, 50);
$soma = 0;
while($soma <= 1000){
	echo $n."<br>";
	$soma += $n;
	$n = rand(0, 50);
}
echo "SOMA: {$soma}";
