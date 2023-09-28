<?php
session_start();
include('db.php');





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/​jquery.min.js"></script>



   
     <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> 
    <link rel="stylesheet" href="styles.css">

     <link href="/icon/css/all.css" rel="stylesheet">
   <link href="/icon/webfonts/all.css" rel="stylesheet">
    <link rel="stylesheet" href="TimeCircles.css" />
    <script src="TimeCircles.js"></script>



   <style type="text/css">
       
   a{
        text-decoration: none;
        color: white;
    }
    .btnc{
        background-color:#04323A;
        
    }
    .text{
        color:#04323A;

    }


   </style>
   
    


    <title>User Page</title>
</head>
<body>

<?php	include('userheader.php'); ?>

<div class="container-fluid">

	<div>

		<?php

   $correct =0;
   $wrong = 0;

   if (isset($_SESSION['answer'])) {
   	
    for ($i=0; $i <sizeof($_SESSION['answer']); $i++) { 
    	
    	$answer = "";
    	$sql = "SELECT * FROM que WHERE category = '$_SESSION[examcat]' && question_no= $i";

    	$res = mysqli_query($connection, $sql);
    	while ($row= mysqli_fetch_array($res)) {
    		$answer = $row['answer'];

         }
    		if (isset($_SESSION['answer'][$i])) {
    			
    			if ($answer == $_SESSION['answer'][$i]) {
    				

    				$correct = $correct +1;
    			}else{

    				$wrong = $wrong +1;
    			}
    		}else{
    			$wrong = $wrong +1;
    		}
    	
    }

   }

   $count = 0;

   $query = "SELECT * FROM que WHERE category = '$_SESSION[examcat]'";
   $result = mysqli_query($connection, $query);
   $count = mysqli_num_rows($result);
   $wrong = $count-$correct;

   echo '<div class="card">
        <div class="card-header">User Result</div>
        <div class="card-body">
        
        <div class="">
          <table class="table table-bordered">
            <tr>
              <th>Name</th>
              <td>Sulaiman Muhammed</td>
            </tr>
            <tr>
              <th>Email ID</th>
              <td>muhtohasulaiman@gmail.com</td>
            </tr>
            <tr>
              <th>Gender</th>
              <td>Male</td>
            </tr>
            <tr>
              <th>Total Number of Questions</th>
              <td>'.$count.'</td>
            </tr>

            <tr>
              <th>Wrong Answers</th>
              <td>'.$wrong.'</td>
            </tr>
            <tr>
              <th>Correct Answers</th>
              <td>'.$correct.'</td>
            </tr>
          </table>
        </div>
        
    </div></div></div>












   ';



		?>
		








	</div>
	









</div>














<?php include('footer.php'); ?>
</body>
</html>


















