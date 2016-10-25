<?php
$array = [1,2,3,4,5,6,7,8,9,10];
$arrayResultat = FactorialArray($array);
if (is_array($arrayResultat)) {
print_r($arrayResultat);
} else if (!$arrayResultat) {
print_r("No és un array...");
}

function FactorialArray ($array) {
$arrayResultat = []; 
if (is_array($array)) {
	for ($i = 0; $i < count($array); $i++) {
		$num = $array[$i];
	if (is_int($array[$i])) {
		$arrayResultat[$num] = factorial($num);
		}
	}
	return $arrayResultat; 
	} else {
	return false;
		}
	}
function factorial ($num) {
if ($num === 0) return 1;
return $num * factorial($num - 1);
}
?>