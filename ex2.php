<?php
$mostra = GeneraMatriu(4);
MostrarMatriu($mostra);
echo "</br>";
MostrarMatriu(GirarMatriu($mostra));

function GeneraMatriu($n) {
for ($i = 0; $i < $n; $i++) {
	for ($x = 0; $x < $n; $x++) {
		if ($i == $x) {
		$array[$x][$i] = "*";
		} else if ($i < $x) {
			$array[$x][$i] = rand(10,20);
		} else {
			$array[$x][$i] = $i + $x;
			}
		}
	}
	return $array;
}
function GirarMatriu($array) {
for ($i = 0; $i < sizeof($array); $i++) {
	for ($x = 0; $x < sizeof($array); $x++) {
		$girar [$i][$x] = $array [$x][$i];
		}	
	}
	return $girar;
}
function MostrarMatriu($array) { 
	echo "<center>";
	echo "<table style='border: solid 3px; border-collapse: collapse border-color: blue;'>";
foreach ($array as $fila) {
	echo "<tr style='border: solid 3px; border-collapse: collapse border-color: blue;'>";
foreach ($fila as $columna) {
	echo "<td style='border: solid 3px; border-collapse: collapse; border-color: blue;'>";
	echo $columna; 
	echo "</td>";
	}
		echo "</tr>";
	}
	echo "</table>";
	echo "</center>";
}
?>	