<?php
session_start();



$queno = $_POST['questionsno'];
$value = $_POST['valuee'];
$_SESSION['answer'][$queno]=$value;

echo $_SESSION['answer'][$queno];




?>