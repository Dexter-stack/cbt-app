<!DOCTYPE html>
<html>
<head>
	<title>Admin Form</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/​jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"> 
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/icon/css/all.css" rel="stylesheet">
   <link href="/icon/webfonts/all.css" rel="stylesheet">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <style type="text/css">
   	
    a{
    	text-decoration: none;
    	color: white;
    }
    .btnc{
    	background-color:  #04323A;
    	
    }
    .text{
    	color: #04323A;

    }

   </style>

</head>
<body style="background-color: #fffdf7">

	

	<?php
include('header.php');


	?>


<div class="container-fluid"  >
			<strong><h3 class="mt-3 " style="text-align: center; color:  #0B1320;">AVAILABLE ONLINE CBT 
<br><small>GET THE WORLD CLASS & VERIFIED CBT QUESTIONS</small></h3></strong>


<div class="row">

	

  <div class="col-lg-3 col-md-4 col-12 mt-4 mx-lg-5 "  >
<div class="card" style="background-color:#fffdf7;" >
 <img src="pume.png" style="height: 7.5em;">
  <div class="card-body">
    <h5 class="card-title text-center">JAMB CBT</h5>
    <p class="card-text"></p>
   <strong> <a href="#" type="button" class="btn btnc align-center text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Click here to start</a></strong>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-4 col-12 mt-4 mx-lg-5" >
<div class="card" style="background-color:#fffdf7;" >

 <img src="jamb.jpg">
  <div class="card-body" >

    <h5 class="card-title text-center"></h5>
    <p class="card-text"></p>
    <a href="#"  type="button"  class="btn btnc align-center text-light" data-bs-toggle="modal" data-bs-target="#regSuccessful ">Click here to start</a>
  </div>
</div>
</div>



<div class="col-lg-3 col-md-4 col-12 mt-4 mx-lg-5" >
<div class="card" style="background-color:#fffdf7;" >
 <img src="unilorin.jpg"  style="height: 7.5em;">
  <div class="card-body">
    <h5 class="card-title text-center">UNILORIN MOCK</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btnc align-center text-light">Click here to start</a>
  </div>
</div>
</div>



  <div class="col-lg-3 col-md-4 col-12 mt-4 mx-lg-5 "  >
<div class="card" style="background-color:#fffdf7;" >
 <img src="quiz.jpg"  style="height: 6em;">
  <div class="card-body">
    <h5 class="card-title text-center">QUIZ</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btnc align-center text-light">Click here to start</a>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-4 col-12 mt-4 mx-lg-5" >
<div class="card" style="background-color:#fffdf7;" >
  <img src="mock.png"  style="height: 8em;">
  <div class="card-body">
    <h5 class="card-title text-center">GENERAL MOCK</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btnc align-center text-light">Click here to start</a>
  </div>
</div>
</div>


<div class="col-lg-3 col-md-4 col-12 mt-4 mx-lg-5" >
<div class="card"  style="background-color:#fffdf7;">
 <img src="league.jpg"  style="height: 8em;">
  <div class="card-body">
    <h5 class="card-title text-center">LEAGUE</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btnc align-center text-light">Click here to start</a>
  </div>
</div>
</div>



<div class="col-lg-3 col-md-4 col-12 mt-4 mx-lg-5" >
<div class="card" style="background-color:#fffdf7;" >
  <i class="fas fa-user-graduate fa-5x text-center  mt-2" style="color:  #04323A"></i>
  <div class="card-body">
    <h5 class="card-title text-center">Challenge</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btnc align-center text-light">Click here to start</a>
  </div>
</div>
</div>







</div>
</div>


<div class="container-fluid">
<div class="row">
	
		
      <div class="container-fluid col-lg-3 col-md-4 col-12 ">
	<form class="p-4">
	<h3> Find Your Past Question</h3>
	<p class="mt-4">Fill in the form below to find your Past Questions </p>
		<label class="mt-4">Course/Subject</label>
				<input type="email" name="Course" id="myemail" class="form-control" placeholder="Enter Course">
		<label class="mt-4">Category</label>
				<input type="text" name="Coursecat" class="form-control" placeholder="Enter Category">
				<input type="submit" name="Search" value="Search" class="btn  mt-3" style="background-color:  #04323A; color: white;">
	</form></div>








<?php
include("footer.php");
?>




<!-- Signup modal -->
 <div class="modal fade " id="userSignup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color:#0B1320; ">Create Account with MYCBT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      
      <div class=" row ">
       

      
      <!-- <div class=" rounded-3  p-3" style="background-color: navy">
 -->  <div class="col-lg-12 col-md-12 col-12 col-xs-12 " >
  	<div class=" input-group mb-3">
  	 <span class="input-group-text text" id="basic-addon1">First Name</span>
    <input type="text" class="form-control" placeholder="Enter First Name"  name="fname" value="" id="fname">
  </div></div>
  <div class="col-lg-12 col-md-12 col-12 col-xs-12">
  	<div class=" input-group mb-3">
  	 <span class="input-group-text text" id="basic-addon1">Last Name</span>
  	
    <input type="text" class="form-control" placeholder="Enter Last name" aria-label="Last name" name="lname" value="" id="lname">
  </div></div>

  <div class="col-lg-12 col-md-12 col-12 col-xs-12">
<div class=" input-group mb-3">
  	 <span class="input-group-text text" id="basic-addon1">Display Name</span>
    <input type="text" class="form-control text" placeholder="Enter Display Name" aria-label="Last name" name="dname" value="" id="dname">
  </div></div>

   <div class="col-lg-12 col-md-12 col-12 col-xs-12">
<div class=" input-group mb-3">
  	 <span class="input-group-text text" id="basic-addon1">E-mail</span>
    <input type="email"  id="email" class="form-control" placeholder="muht@gmail.com" aria-label="email" name ="myemail" value=""  id="email">

  </div>
  <label id="emailmsg" class="mt-1"></label>
</div>


  <div class="col-lg-12 col-md-12 col-12 col-xs-12 ">
 <label class="text" >
    Gender
  </label>
<div class="form-check">
  <input class="form-check-input " type="radio" name="gender" value="Male" id="gender">
  <label class="form-check-label text" >
    Male
  </label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="radio" name="gender" value="Female" id="gender" checked>
  <label class="form-check-label text">
    Female
  </label>
</div>
   
</div>

  <div class="col-lg-12 col-md-12 col-12 col-xs-12">
<div class=" input-group mb-3">
  	 <span class="input-group-text text" id="basic-addon1">Mobile</span>
    <input type="text" class="form-control" placeholder="Enter your mobile number" aria-label="Last name" name="mobile" value="" id="mobile">
  </div></div>


   <div class="col-lg-12 col-md-12 col-12 col-xs-12">
<div class=" input-group mb-3">
  	 <span class="input-group-text text" id="basic-addon1">Password</span>
    <input type="password" class="form-control" placeholder="Enter Password" aria-label="Password" name ="Password" value="" id="password">
  </div></div>
  <label id="pasmsg"></label>


   <div class="col-lg-12 col-md-12 col-12 col-xs-12">
<div class=" input-group mb-3">
  	 <span class="input-group-text text" id="basic-addon1">Confirm Password</span>
    <input type="password" class="form-control" placeholder="Enter Password again" aria-label="Password" name ="Password" value="" id="cpassword">
  </div></div>
   <label id="cpasmsg"></label>


    <div class="col-lg-12 col-md-12 col-12 col-xs-12">
  <button class="btn text-light " style="background-color: #04323A;" type="button" id="usersignup" >
  <span class="" role="" aria-hidden="true"></span>
  <span class="visually-">Submit</span>
</button>
</div>
    
    <div class="col-lg-12 col-md-12 col-12 col-xs-12">
   <p class="text">Already have an account?<a href="#"> Click here to login</a></p></div>



 




<!-- </div> -->
</div>



      

    </div>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">SignUp</button>
      </div> -->
    </div>
  </div>
</div>
     </div>
    </div>
  </div>




  <div class="modal fade " id="userLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Student Login Page</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form mb-5">



      <div class="col-lg-12 col-sm-6 col-m-6 container"   >
              <center class="mb-3"> <i class="fa fa-user-graduate fa-5x text-center  mt-2" style="color: #04323A; "></i></center>

       <div class="col-lg-12 col-md-12 col-12 col-xs-12">
  	<div class=" input-group mb-3">
  	 <span class="input-group-text " id="basic-addon1" style="color: #04323A;" ><i class="fas fa-user"></i></span>
  	
    <input type="text" class="form-control" placeholder="Enter E-mail" aria-label="Last name" name="lname" value="">
  </div></div>


         <div class="col-lg-12 col-md-12 col-12 col-xs-12">
<div class=" input-group mb-3">
  	 <span class="input-group-text " id="basic-addon1" style="color: #04323A;"><i class="fas fa-unlock-alt"></i></span>
    <input type="password" class="form-control" placeholder="enter password" aria-label="Password" name ="Password" value="">
  </div></div>
        <button type="button" name="Login_button" id = "Login_button" class=" btn  mt-4" style="color: #04323A;">Login</button>
        <p class="mt-4 container"><strong>forgot password click <a href=""></strong><span class=" rounded-pill p-3 text-light" style="background-color:  #04323A;">here</span></a></p>


      </div>
      

    </div>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">SignUp</button>
      </div> -->
    </div>
  </div>
</div>
     </div>
    </div>
  </div> 



  <!-- Registration successful -->

  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="regSuccessful" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
      	<center><img src="success.png" class="w-2"></center>
       <pre class="text-size-3"> Resgistration Successful please </pre> <pre>check your E-mail for link Verification</pre>
      </div>
      
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
       
     
    </div>
  </div>
</div>










<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="bootstrap.min.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
    // alert('hello');
        // Email validation
		$("#email").keyup(function(){
         if (validateEmail()) {
         	//if  email validated input border changed to green
         	$('#email').css("border","2px solid green");

         	$('#emailmsg').html("<p class='text-success'>Valid Email </p>");
         }else{
         	//if email not validated input changed to red 
         	$('#email').css("border", "2px solid red")
         	$('#emailmsg').html("<p class='text-danger'>Invalid Email </p>");
         }
		});
		//password confirmation
		$('#cpassword').keyup(function(){
         //if password is the same as cpassword input border change to green
         if(validatePassword()){

         $('#cpassword').css("border", "2px solid green");
          $('#cpasmsg').html("<p class='text-success'>Password match </p>");
     }else{
           $('#cpassword').css("border", "2px solid red");
           $('#cpasmsg').html("<p class='text-danger'>Password does not match </p>");
     }
		});



		$('#password').keyup(function(){
         if (checkPassword()=="weak") {
         	$('#password').css("border", "2px solid red")
         	$('#pasmsg').html("<p class='text-danger'>Password too Weak </p>");

         }else if(checkPassword()=="large"){
         	$('#password').css("border", "2px solid red")
         	$('#pasmsg').html("<p class='text-danger'>Password too large </p>");

       
         }else{
         	$('#password').css("border", "2px solid green")
         	$('#pasmsg').html("<p class='text-success'>Good Password </p>");

         }
		});




    $('#usersignup').click(function(){
   var fname = $("#fname").val();
   var password = $("#password").val();
   var cpassword = $("#cpassword").val();
   var lname = $("#lname").val();
   var dname = $("#dname").val();
   var mobile =  $("#mobile").val();
   var myemail = $("#email").val();
   var gender =$("#gender").val();
   var  reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(fname==""){
	alert("First name field is empty");

}else if(lname ==""){
 alert("Last Name field is empty");
}else if(dname==""){
 alert("Display Name field is empty");
}
 else if (myemail == "") {
  alert("Empty Email");
}else if (!(myemail.match(reg))) {
  alert("Invalid email format");
}else if(mobile == ""){
alert('Phone Number is empty');

}else if(password ==""){
  alert("password field is empty");


}else if(password.length<6){
  alert("password is too weak");
}else if(password.length >12){
  alert('password too Large');
}else if (cpassword != password) {
  alert("passwords do not match");
    }else{

     $.ajax({
         url:"myform.php",
         method:"POST",
         data:{
            user_fname:fname,
            user_password:password,
            user_lname:lname,
            user_dname:dname,
            user_mobile:mobile,
            user_myemail:myemail,
            user_gender:gender

         },
         success:function(data){
         	if(data == "yes"){
         		alert("data none");
         	}else{
         		$("#usersignup").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true">');
                //$('#usersignup').
         		//alert("data show");
         		$('#userSignup').hide();
         		$('#regSuccessful').modal("show");
         		 setTimeout('window.location.href= "cbtHome.php";',3000);
         	}
         }








     });

   }




   });


	});



      //eamil validation function 
	function validateEmail(){
		var  email = $("#email").val();
		 var  reg = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{3,6}(?:\.[a-z]{2})?)$/i;
		 if (reg.test(email)) {
		 	return true;
		 }else{
		 	return false;
		 }
	}

	//password validation
	function validatePassword(){
		var password = $('#password').val();
		var cpassword = $('#cpassword').val();
		if (cpassword==password) {
			return true;
		}else{
			return false;
		}
	}

   function checkPassword(){
   	 var password = $("#password").val();
   	 if (password.length<6) {
   	 	return "weak";
   	 }else if(password.length>12){
   	 	return "large";

   	 }else{
   	 	return "strong";
   	 }
   }

   







</script>




</body>
</html>