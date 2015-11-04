<?php

 
for ($i = 1; $i <= 100; $i +=1){
	if ($i % 15 == 0){
		echo "FIZZBUZZ".PHP_EOL;
	}elseif ($i % 5 == 0) {
		echo "BUZZ". PHP_EOL;
	}elseif($i % 3 == 0){
		echo "FIZZ". PHP_EOL;	
	}else {	
		echo $i . PHP_EOL;
	}	
}