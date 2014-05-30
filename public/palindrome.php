<?php

// Prompt user to enter in phrase
fwrite(STDOUT, "Want to know if a phrase is a palindrome? Enter in your input: " . PHP_EOL);
//get input from user
$input = trim(fgets(STDIN));

function Palindrome($input)
{
	$str = strtolower(preg_replace('/[^A-Za-z0-9_]/', '', $str));
	$sort = strrev($string);
	if ($sort === $str) {
	echo "This is a palindrome!" . PHP_EOL;
	} else 
	echo "This is not a palindrome..." . PHP_EOL;
}

Palindrome($input);

?>


    
