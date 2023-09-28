<?php 
session_start();



//print_r($_SESSION['array']);

//print_r( $_SESSION['array'][0]); 
















?>



<!DOCTYPE html>
<html>
<head>
	<title></title>


	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> 
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/TimeCircles.css" />
    <script src="style/TimeCircles.js"></script>

</head>
<body>














<script src="bootstrap.min.js"></script> 



<script type="text/javascript">

  


  $(document).ready(function(){

load();



 


  	function load(){
  		$.ajax({
      url:"test.php",
      method:"POST",
      
      data:{examcat:'hello'},
      success:function(data)
      {
        var d = JSON.parse(data);
        document.write(d[0]);
        alert(data);
      }
    });
  	}








});

</script>
</body>

</html>






