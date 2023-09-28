<?php 
session_start();

include('db.php');


$sql = "SELECT * FROM que WHERE category='phy125'";
$res = mysqli_query($connection, $sql);

$array = array();
$_SESSION['array']= array();



//print_r($row);

while ($row = mysqli_fetch_assoc($res)) {
	$array [] = $row;
	
}

//print_r($array);

$_SESSION['array'] = $array;

if (isset($_POST['examcat'])) {
	echo json_encode(($array));
}









?>