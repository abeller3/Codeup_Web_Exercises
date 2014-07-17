 <?php

//GET STDIN, strip whitespaces and newlines
fwrite(STDIN, "Enter in your phrase to make alphabet soup: " . PHP_EOL) ;
$input = trim(fgets(STDIN));
//input is sent through function alphabet soup
$result = alphabet_soup($input);
//the results are then echoed in alphabetical order
echo $result . PHP_EOL;

function alphabet_soup($string) 
{

	$string = strtolower($string);
	$words = explode(' ', $string);
	$exploded_words = [];

	foreach ($words as $word) 
	{
		$new_word = str_split($word);
		sort($new_word);
		$exploded_words[] = $new_word;

	}

	$new_new_words = [];

	foreach ($exploded_words as $new_word) 
	{
		$mixed_up = implode($new_word);
		$newword[] = $mixed_up;
	}

	$ABsoup = implode(' ', $newword);
	return $ABsoup;

}

?>