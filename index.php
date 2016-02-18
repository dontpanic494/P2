<?php
//error_reporting(-1); # Report all PHP errors
//ini_set('display_errors', 1);
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
			<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='GET'>
				<label>
				<input type='text' maxlength=1 id="num-word-input" class='form-control' name='word_count' value='4'>Number of Words (1-9)
				</label>
				<br>
      			<input type='checkbox' name='add_num'> <span>Add Number</span>
   				<br>
   				<input type='checkbox' name='add_spe'> <span>Add Special Character</span>
   				<br>
   				<input type='submit' class='btn btn-default' value='Generate'>
   				<?php echo $error ?>
			</form>
			<br>
			<p>The theory behind the tech:</p>
			<a href="http://xkcd.com/936/">
			<img class='comic' src='Images/password_strength.png' alt='xkcd style passwords'>
			</a>
		</div>

	</body>

</html>