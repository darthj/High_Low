<?php
$a = 10;
$b = 5;

function add($a, $b)
{
   if(is_numeric($a) && is_numeric($b)){
    	return $a + $b;
    } else {
    	return errorMessage($a,$b);
    }
}

function subtract($a, $b)
{
 	if(is_numeric($a) && is_numeric($b)){
    	return $a - $b;
    } else {
    	return errorMessage($a,$b);
    }
}


function multiply($a, $b)
{
    if(is_numeric($a) && is_numeric($b)){
    	return $a * $b;
    } else {
    	return errorMessage($a,$b);
    }
    
}

function divide($a, $b)
{
  if($b==0){
  	return "ERROR: you can not have 0 as a divisor\n";
  } elseif(is_numeric($a) && is_numeric($b)){
    	return $a/$b;
    } else {
    	return errorMessage($a,$b);
    }
}

function multiply2($a,$b) 
{   // bonus: refactor to use your add() and a for loop
	if(is_numeric($a) && is_numeric($b)){
	$c =0;
    for($i = 1; $i <=$b; $i +=1){
    		$c +=$a;
    	}
    return $c;
	} else {
		return errorMessage($a,$b);
	}
 }

 function modulus($a, $b)
 {	
 	if($b==0){
 	return "ERROR: you can not have 0 as a divisor\n";
 	} elseif(is_numeric($a) && is_numeric($b)){
    	return $a % $b;
    } else {
    	return errorMessage($a,$b);
    }
 }

 function errorMessage($a,$b)
 {
	  return 'ERROR: Please input only numbers $a is '. $a . ' $b is '. $b. PHP_EOL;
 }

echo add(4,3).PHP_EOL;
echo subtract(8,4).PHP_EOL;
echo multiply(7,5).PHP_EOL;
echo divide(16,4).PHP_EOL;
echo modulus(4,3).PHP_EOL;
echo multiply2(7,5).PHP_EOL;