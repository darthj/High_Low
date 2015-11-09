<?php
$physicistsArray = ["Gordon Freeman", "Samantha Carter", "Sheldon Cooper", "Quinn Mallory", "Bruce Banner", "Tony Stark"];

function humanizedList($array) {
 	 $pop = array_pop($array);
 	 $famousFakePhysicists = implode(",", $array);
	echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists} "."and {$pop}\n";
} 
humanizedList($physicistsArray);
