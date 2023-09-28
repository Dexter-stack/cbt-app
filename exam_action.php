<?php 
session_start();
include("db.php");



$current_datetime = date("Y-m-d") . ' ' . date("H:i:s", STRTOTIME(date('h:i:sa')));

if (isset($_POST['course'])) {
	$course = $_POST['course'];

	$query = "SELECT * FROM exam  WHERE examcat ='$course'";

	$result = mysqli_query($connection, $query);

	if (mysqli_num_rows($result) > 0) {

		$arr = mysqli_fetch_assoc($result);
		$_SESSION['examtime'] = $arr['examtime'];
		$_SESSION['examcat'] = $arr['examcat'];
		echo "string";
		

		
	}
	






}



if (isset($_POST['navigation'])) {
	$examc = $_POST['examcat'];

	$sl = "SELECT * FROM que  WHERE category ='$examc'";
$re = mysqli_query($connection, $sl);
$total = mysqli_num_rows($re);

	



	for($count=1; $count<=$total; $count++ )  
      {
        echo '
        <div class="col-1" style="margin-bottom:10px;">
          <input type="button" class="btn btn-primary btn-lg question_nav" id="'.$count.' " value="'.$count.'">
        </div>
        ';
        
      }
}

























// if (isset($_POST['examcat'])) {

// 	$examcat = $_POST['examcat'];

// $sql = "SELECT * FROM que  WHERE category ='$examcat'";

// $res = mysqli_query($connection, $sql);
// $output = '';
// $count = 1;


// foreach($res as $row)
// 			{
// 				$output .= '
// 				<h1>'.$row["question"].'</h1>
// 				<hr />
// 				<br />
// 				<div class="row">
// 				<div class="col-md-6" style="margin-bottom:32px;">
// 						<div class="radio">
// 							<label><h4><input type="radio" name="option_1" class="answer_option" data-question_id="'.$row["id"].'" id-data="'.$count.'"/>&nbsp;'.$row["opt1"].'</h4></label>
// 						</div>



// 						<div class="radio">
// 							<label><h4><input type="radio" name="option_1" class="answer_option" data-question_id="'.$row["id"].'" id-data="'.$count.'"/>&nbsp;'.$row["opt2"].'</h4></label>
// 						</div>
// 					</div>
// 					';





// 	# code...

// 					$count = $count + 1;
// 				}
// 				$output .= '
// 				</div>
// 				';

// }
















?>