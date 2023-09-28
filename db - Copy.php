<?php 
$host = "localhost";
$db_name = "mycbt";
$username = "root";
$password = "";
$connection = mysqli_connect($host,$username,$password,$db_name);

 if ($connection) {
	echo "Connected";
}else{

	echo "No";
 }




?>