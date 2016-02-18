<?php

	$formData = $_GET;

	// echo '<pre>';
	// var_dump($_GET);
	// echo '</pre>';

	$wordCount = 4;

	if (!empty($formData['word_count'])) {
		$wordCount = intval($formData['word_count']);
	}

	$addNum = !empty($formData['add_num']);
	$addSpe = !empty($formData['add_spe']);
	
	for ($i=11; $i <= 15; $i = $i+2) { 
		$x = $i + 1;
		$test = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-'.$i.'-'.$x.'-hundred.html');
		preg_match_all('#<li>(.+?)</li>#is', $test,$out);

		foreach ($out as $value) {
			$words = $value;
		}
	}

	$speChars[] = '*';
	$speChars[] = '!';
	$speChars[] = '@';
	$speChars[] = '#';
	$speChars[] = '$';
	$speChars[] = '%';


?>