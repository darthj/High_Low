<?php

do{
	fwrite(STDOUT, 'Please enter a starting number. ');
		$num1 = trim(fgets(STDIN));	
} while(!is_numeric($num1));

do{	
	fwrite(STDOUT, 'Please enter an ending number. ');
		$num2 = trim(fgets(STDIN));
} while(!is_numeric($num2));

fwrite(STDOUT, 'Please enter an incrementer. ');
$num3 = trim(fgets(STDIN));

if (empty($num3)){
	$num3 = 1;
}

if($num1 > $num2){
	for($i = $num2; $i <= $num1; $i +=$num3){
		echo $i . PHP_EOL;
	}
} else {
	for($i = $num1; $i <= $num2; $i +=$num3){
		echo $i . PHP_EOL;
		}
	}