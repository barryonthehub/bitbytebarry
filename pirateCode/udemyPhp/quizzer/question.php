<?php include 'database.php' ?>
<?php  
	//Set question number
	$number = (int) $_GET['n'];

	/*
	*	Get Question
	*/
	$query = "SELECT * FROM 'questions'
				WHERE question_number = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$question = $result->fetch_assoc(); 
?>
<!DOCTYPE html>

<html>
  <head>
	<meta charset="utf-8" />
	<title>PHP Quizzer</title>
	<link rel="stylesheet" text="text/css" href="css/style.css" />
  </head>
  <body>
	<header>
	  <div class="container">
		<h1>PHP Quizzer</h1>
	  </div>
	</header>
	<main>
	  <div class="container">
		<div class="current">Question 1 of 5</div>
		<p class="question">
		  <?php echo $question['text']; ?>
		</p>
		<form method="post" action="process.php">
		  <ul class="choices">
			<li><input name="choice" type="radio" value="1" />PHP: Hypertext Preprocessor</li>
			<li><input name="choice" type="radio" value="1" />Private Home Page</li>
			<li><input name="choice" type="radio" value="1" />Personal Home Page</li>
			<li><input name="choice" type="radio" value="1" />Personal Hypertext Preprocessor</li>
		  </ul>
		  <input type="submit" value="Submit" />
		</form>
	  </div>
	</main>
	  <footer>
		<div class="container">
		  Copyright &copy; 2014, PHP Quizzer
		</div>
	  </footer>
  </body>
</html>
