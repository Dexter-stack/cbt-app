<?php
session_start();
include("db.php");


if (isset($_POST['examcat'])) {


$examcat = $_POST['examcat'];
$total_que = 0;

$sql = "SELECT * FROM que  WHERE category ='$examcat'";
$res = mysqli_query($connection, $sql);
$total_que = mysqli_num_rows($res);
$_SESSION['total_que']= $total_que;
echo $total_que;



}

if (isset($_POST['valuee'])) {
	

$queno = $_POST['questionsno'];
$value = $_POST['valuee'];
$_SESSiON['answer'][$queno]=$value;

echo $questionsno;






	
}







?>