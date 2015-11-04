<?php

$answer = rand(1,100);

 do {
	fwrite(STDOUT, 'Guess? ');
	$guess = trim(fgets(STDIN));
	$guess = intval($guess);
	if ($guess < $answer){
		fwrite(STDOUT, "Higher". PHP_EOL);
	} else if ($guess > $answer){
		fwrite(STDOUT, "Lower" .PHP_EOL);
	}
} while ($guess != $answer);
		fwrite(STDOUT, "Congratulations you guessed the number!!!!" . PHP_EOL);