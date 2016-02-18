<?php

	##INITIAL DATA PULL
	$formData = $_GET;

	##SERVER SIDE VALIDATION
	$error = '';
	$count = $_GET['word_count'];
	$wordCount = 4;
	#Confirm input a number
	if (!ctype_digit($count) and !empty($count)){
		$error = '<p class="error"> Hey! Numbers only! Reverting to default four word password.</p>';
	}
	#Confirm input is >=1
	if ($count == '0') {
		$error = '<p class="error"> Zero is not a valid entry! Reverting to default four word password.</p>';
	}
	#Confirm user didn't edit URL to allow larger wordCount
	if ($count > 9) {
		$count = 4;
		$error = '<p class="error"> Hey! Use the form please! Reverting to default four word password.</p>';
	}
	#Pull input from page if not left black
	if (!empty($formData['word_count'])) {
		$wordCount = intval($formData['word_count']);
	}
	#Set default number of words to 4 if blank or non-alpha-numberic character
	if (empty($formData['word_count']) or ctype_alpha($count) or !ctype_alnum($count)){
		$wordCount = 4;
	}

	#If either check box has been used, this toggles the boolean
	$addNum = !empty($formData['add_num']);
	$addSpe = !empty($formData['add_spe']);
	
	##WORD LIBRARY POPULATION
	for ($i=11; $i <= 15; $i = $i+2) { 
		$x = $i + 1;
		$test = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-'.$i.'-'.$x.'-hundred.html');
		preg_match_all('#<li>(.+?)</li>#is', $test,$out);

		foreach ($out as $value) {
			$words = $value;
		}
	}

	##SPECUAL CHARACTER ARRAY
	$speChars[] = '*';
	$speChars[] = '!';
	$speChars[] = '@';
	$speChars[] = '#';
	$speChars[] = '$';
	$speChars[] = '%';


?>