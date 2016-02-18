<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
	<head>
		
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Password Generator</title>

		<link rel='stylesheet' href='CSS/main.css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<?php require'logic.php'; ?>

	</head>

	<body>
		<div class='container'>
			<h1>Password Generator</h1>
			<h2 class="generated-password">
				<?php 
				for($x=0; $x<$wordCount; $x++){
					$select=array_rand($words);
					echo $words[$select];
				}
				?>
				<?php
				if($addNum){
					echo rand (0, 99);
				}
				?>
				<?php
				if($addSpe){
					echo $speChars[rand(0,5)];
				}
				?>

			</h2>
			<br>
			<br>
			<form action='index.php' method='GET'>
				<label>
				<input type='text' id="num-word-input" class='form-control' name='word_count' placeholder='4'>Number of Words
				</label>
				<br>
				<label>
      			<input type='checkbox' name='add_num'> Add Number
   				</label>
   				<br>
   				<label>
   				<input type='checkbox' name='add_spe'> Add Special
   				</label>
   				<br>
   				<input type='submit' class='btn btn-default' value='Generate'>
			</form>
		</div>

	</body>

</html>