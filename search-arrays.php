<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function valueInArray($query, $array)
{
	$result = array_search($query, $array);
		if ($result === false) {
			return false;
		} else {
			return true;
		}
}

if(valueInArray('Tina', $names)){
	echo 'Tina was in the array.'.PHP_EOL;
}

if(!valueInArray('Bob', $names)){
	echo "Bob was not in the array.".PHP_EOL;
}

$evaluate = count(array_intersect($names, $compare)) .PHP_EOL;
print_r($evaluate);

