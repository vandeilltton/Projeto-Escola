<?php
$i = 1;
do{
	$mult = $_GET["numero"]*$i;
	echo $i." * ".$_GET["numero"]." = ".$mult."<br>";	
	$i++;
}while($i <= 10);