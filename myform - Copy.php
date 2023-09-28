<?php

include("db.php"); 
if(isset($_POST["user_fname"])){
	$firstName=$_POST['user_fname'];
    $lname = $_POST['user_lname'];
    $password = $_POST['user_password'];
    $dname = $_POST['user_dname'];
    $mobile = $_POST['user_mobile'];
    $email = $_POST['user_myemail'];
    $gender = $_POST['user_gender'];

    $pas = md5($password);

    $sql = "INSERT INTO user (id,first_name,last_name,display_name,email,mobile,gender,password) VALUES(null,'$firstName','$lname','$dname','$email','$mobile','$gender','$password')";
    $res = mysqli_query($connection,$sql);
    if($res){
    	echo "Yes";
    }else{
    	echo "No";
    }








}







?>