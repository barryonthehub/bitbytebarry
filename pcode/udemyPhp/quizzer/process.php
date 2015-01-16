<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
	//Check to see if score is set
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

	//See if post was submitted
	if($_POST){
	  $number = $_POST['number'];
	  $selected_choice = $_POST['choice'];
	  print_r($_POST);
//9	  $next = $number++;

	  //Get total questions
//5	  $query = "SELECT * FROM `questions`";
	  //Get results
//5	  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
//5	  $total = $results->num_rows;

	  //Get correct choice
//9	  $query = "SELECT * FROM `choices`
//9				WHERE question_number = $number AND is_correct = 1";
	  
	  //Get Result
//8	  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	  
	  //Get Row		
//8	  $row = $result->fetch_assoc();

	  //Set correct choice
//8	  $correct_choice = $row['id'];

	  //Compare
//7	  if($correct_choice == $selected_choice){
//7		//Answer is corect
//7		$_SESSION['score']++;
//7	  }

//1	  echo $total;
//1	  die();
	  //Check if last question
//6	  if($number == $total){
//6		header("Location: final.php");
//6		exit();
//6	  } else {
//6		header("Location: question.php?n=".$next);
	}
