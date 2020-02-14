<style>
	table tr td{
		border: 1px dotted #000;
		padding: 10px;
	}
</style>
<?php

$table = "<table>";
$rows = $_GET["rows"];
$cols =  $_GET["cols"];
$row = 1;
while($row <= $rows){
	$table .= "<tr>";
	$col = 1;
	while ($col <= $cols) {
		$table .= "<td> LINHA {$row}, COLUNA {$col} </td>";
		$col++;
	}
	$table .= "</tr>";
	$row++;
}
$table .= "</table>";
echo $table;
