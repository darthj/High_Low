<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays($array1, $array2){
	$newArray = [];
	$arrayLength = count($array1);
	for ($i = 0; $i <= ($arrayLength -1); $i++)
		{
			if ($array1[$i] === $array2[$i]){
			array_push($newArray,$array1[$i]);
			} else {
			array_push($newArray, $array1[$i]);
			array_push($newArray, $array2[$i]);
			}
		} print_r($newArray).PHP_EOL;
	 }

combineArrays($names, $compare);
