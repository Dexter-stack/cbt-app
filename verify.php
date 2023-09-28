<?php
include "db.php";
ob_start();
if (isset($_GET['vkey'])) {
	#process verification
	$vkey = $_GET['vkey'];
	$query = "SELECT vkey, status FROM user WHERE status='not verified' and vkey ='".$vkey. "'";

	$result = mysqli_query($connection , $query);
   $numRow = mysqli_num_rows($result);
   if ($numRow>0) {
      //execute the code
      header("Location: cbtHome.php");
   	
   }else{
   	echo "this account is invalid";
      echo json_encode(array('message'=>$_GET['vkey']));
   }

}else{
	die("Something went wrong ");
}















?>