<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
	//Check to see if score is set
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

	//See if post was submitted
	if($_POST){
//echo "i've been been submitted";
	  $number = $_POST['number'];
	  $selected_choice = $_POST['choice'];

	  //print_r($_POST);
	  echo $number.'<br>';
	  echo $selected_choice;
	}
