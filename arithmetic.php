<?php
$a = 10;
$b = 5;
function validateNumbers($a,$b)
{
	if(is_numeric($a)&& is_numeric($b))
	{
		return true;
	}	
	return false;
}

function validateZero($b)
{
	$b == 0;
}

function errorMessage($a,$b,$errorType)
{
	switch($errorType){
		case 'non numeric':
			return "Error! Values given must be numeric.  You gave {$a} and {$b}.";
			break;
		case 'divide by zero':
			return "Error! You can't divide by zero. YOu gave {$a} and {$b}.";
			break;
		default:
			return "ERROR not known.";
			break;
	}
}

function add($a, $b)
{
   if (validateNumbers($a,$b))
   {
    	return $a + $b;
   }else {
    	return errorMessage($a,$b, 'non numeric');
    }
}

function subtract($a, $b)
{
 	 if (validateNumbers($a,$b))
	 {
    	return $a - $b;
     } else {
    	return errorMessage($a,$b, 'non numeric');
     }
}


function multiply($a, $b)
{
    if(validateNumbers($a,$b)){
    	return $a * $b;
    } else {
    	return errorMessage($a,$b, 'non numeric');
    }
    
}

function divide($a, $b)
{
  if(validateZero($b)) { 
  	return errorMessage($a,$b,'divide by zero');
  } elseif(validateNumbers($a,$b)){
    	return $a/$b;
    } else {
    	return errorMessage($a,$b,'non numeric');
    }
}

function multiply2($a,$b) 
{   // bonus: refactor to use your add() and a for loop
	if(validateNumbers($a,$b)){
		$c =0;
    for($i = 1; $i <=$b; $i +=1){
    		$c +=$a;
    	}
    return $c;
	} else {
		return errorMessage($a,$b, "non-numeric");
	}
 }

 function modulus($a, $b)
 {	
 	if(validateZero($b)){
 	return errorMessage($a, $b,'divide by zero');
 	} elseif(validateNumbers($a,$b)){
    	return $a % $b;
    } else {
    	return errorMessage($a,$b,'non numeric');
    }
 }



echo add(4,3).PHP_EOL;
echo subtract(8,4).PHP_EOL;
echo multiply(7,5).PHP_EOL;
echo divide(16,4).PHP_EOL;
echo modulus(4,3).PHP_EOL;
echo multiply2(7,5).PHP_EOL;