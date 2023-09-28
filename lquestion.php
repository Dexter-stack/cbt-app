<?php 
session_start();
include("db.php");

if(isset($_POST['load'])){

	$question_no = "";
	$question="";
	$opt1 ="";
	$opt2 ="";
	$opt3 ="";
	$opt4 ="";
	$answer ="";
	$count = 0;
	$ans="";
	$out="";
	$examca = $_POST['examcat'];

	$queno = $_POST['questionsno'];
	if(isset($_SESSION['answer'][$queno])){
		$ans =$_SESSION['answer'][$queno];
	}
	$query = "SELECT * FROM que  WHERE category = '$examca'  "; 

	$result = mysqli_query($connection, $query);

	$count=  mysqli_num_rows($result);


	
        $row = mysqli_fetch_assoc($result);
        echo json_encode(($row));

    
}

//load navigation

























?>