<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';



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
     $vkey = md5(time().$email);

    $sql = "INSERT INTO user (id,first_name,last_name,display_name,email,mobile,gender,password,vkey,status) VALUES(null,'$firstName','$lname','$dname','$email','$mobile','$gender','$pas','$vkey','not verified')";
    $res = mysqli_query($connection,$sql);
    if($res){
    




    $mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sulaimanmuhammed18@gmail.com';                 // SMTP username
$mail->Password = '08100891337';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'sulaimanmuhammed18@gmail.com';
$mail->FromName = 'Mycbt';
$mail->addAddress('muhtohasulaimon@gmail.com', 'User');     // Add a recipient
$mail->addAddress('sulaimanmuhammed18@gmail.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('sulaimanmuhammed18@gmail.com');
$mail->addBCC('sulaimanmuhammed18@gmail.com');

//$mail->addAttachment('');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Link Verification';
$mail->Body    = 'Click  <a href="http://localhost/cbt/verify.php?vkey='.$vkey.'">here</a> for account Verification';
$mail->AltBody = 'If this message is not yours please delete this ';
$mail->send();

    echo "Yes";

    }else{
    	echo "No";
    }








}






//code for adding questions into the database backend

if (isset($_POST['questions'])) {
    # code...
    $questions = $_POST['questions'];
    $opt1 = $_POST['opt1'];
    $opt2 = $_POST['opt2'];
    $opt3 = $_POST['opt3'];
    $opt4 = $_POST['opt4'];
    $answer = $_POST['answer'];
    $category = $_POST['category'];

    $query = "INSERT INTO que (id,question,opt1,opt2,opt3,opt4,answer,category) VALUES(null,'$questions','$opt1','$opt2','$opt3','$opt4','$answer','$category')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        
        echo "Yes";
    }else{
        echo "No";
    }

}



?>