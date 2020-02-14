<?php 

$i = 0;
$soma = 0;
while($i <= 10000){
	if($i%7 == 0){
		$soma += $i;
	}
	$i++;
}
echo $soma;
