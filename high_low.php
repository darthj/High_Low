<?php
if ($argc < 3) {
	die("There are not enough arguments to run this program. Please pass me a min and max.". PHP_EOL);
}

$min = $argv[1];
$max = $argv[2];


$answer = mt_rand($min,$max);
$counter = 0;
 do {
	fwrite(STDOUT, 'Guess? ');
	$guess = trim(fgets(STDIN));
	if (!is_numeric($guess)){
			fwrite(STDOUT, 'Please input a number!'.PHP_EOL);
	} else {
			$guess = intval($guess);
			if ($guess < $answer){
				fwrite(STDOUT, "Higher". PHP_EOL);
			} else if ($guess > $answer){
				fwrite(STDOUT, "Lower" .PHP_EOL);
			}
		$counter +=1;
		}
	} while ($guess != $answer);
		fwrite(STDOUT, "Congratulations you guessed the number in ". $counter . " guesses !!!!" . PHP_EOL);