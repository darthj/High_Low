<?php

$answer = rand(1,100);
$counter = 0;
 do {
	fwrite(STDOUT, 'Guess? ');
	$guess = trim(fgets(STDIN));
	$guess = intval($guess);
	if ($guess < $answer){
		fwrite(STDOUT, "Higher". PHP_EOL);
	} else if ($guess > $answer){
		fwrite(STDOUT, "Lower" .PHP_EOL);
	} $counter +=1;
} while ($guess != $answer);
		fwrite(STDOUT, "Congratulations you guessed the number in ". $counter . " guesses !!!!" . PHP_EOL);