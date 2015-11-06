<?php
$a = 10;
$b = 5;

function add($a, $b)
{
    return $a + $b;
}
echo add(4,3).PHP_EOL;

function subtract($a, $b)
{
    return $a - $b;
}

echo subtract(8,4).PHP_EOL;

function multiply($a, $b)
{
    return $a * $b;
    
}
echo multiply(7,5).PHP_EOL;

function divide($a, $b)
{
   return $a/$b;
}
echo divide(16,4).PHP_EOL;

function multiply2($a,$b) 
{   // bonus: refactor to use your add() and a for loop
	$c =0;
    for($i = 1; $i <=$b; $i +=1){
    		$c +=$a;
    	}
    return $c;
 }
 echo multiply2(7,5).PHP_EOL;

 function modulus($a, $b)
 {
 	return $a % $b;
 }
 echo modulus(4,3).PHP_EOL;