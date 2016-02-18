<?php



$formData = $_GET;

echo '<pre>';
var_dump($_GET);
echo '</pre>';

$wordCount = 4;

if (!empty($formData['word_count'])) {
	$wordCount = intval($formData['word_count']);
}
/*
$addNum = !empty($formData['add_num']);
$addSpe = !empty($formData['add_spe']);

if ($addNum) {

}

$test = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-11-12-hundred.html');
$wordsArray = preg_match_all('#<li>(.+?)</li>#is', $test,$out);

//echo var_dump($out);
*/
$words = [];

$words[0] = 'First';
$words[1] = 'Second';
$words[2] = 'Third';
$words[3] = 'Forth';
$words[4] = 'Fifth';
$words[5] = 'Sixth';
$words[6] = 'Seventh';
$words[7] = 'Eighth';
$words[8] = 'Ninth';
$words[9] = 'Tenth';
$words[10] = 'Eleventh';
$words[11] = 'Twelveth';
$words[12] = 'Thirteenth';
$words[13] = 'Fourteenth';
$words[14] = 'Fifteenth';



?>