<!DOCTYPE html>
<html>
<head>
  <title></title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/​jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="student.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/icon/css/all.css" rel="stylesheet">
   <link href="/icon/webfonts/all.css" rel="stylesheet">
  <style type="text/css">
    .sidenav {
 /* height: 100%;*/
 
 
 
  width: 25%;
  background-color: rgba(128,128,128,0.8);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  position:fixed;
  z-index: 1;


}

.sidenav a {
  padding: 10px 10px 10px 10px;
  text-decoration: none;
  font-size:15px;
  color: white;
  /*color: #818181;*/
  display: block;
  transition: 0.3s;
}
li{
  padding-top: 20px;
}

.sidenav a:hover {
  /*color: #f1f1f1;*/
  /*border: 1px solid  #f1f1f1; */
  /*padding: 10px;*/
  border-radius: 15px;
  background-color: navy;
  
}

@media screen and (max-width: 680px) {
  .sidenav {width:50%;}
  .sidenav a {font-size: 18px;}
 
}





  </style>

</head>
<body>


 




    <div class="container-fluid mt-5">

<div class="row">
  
    
    <div class="container-fluid col-lg-3 col-md-3 col-12 ">

      <div class="p-4">
  <h3> Student Informaton</h3>
  
   <div  ><img  src="<?php
      if(isset($_SESSION['passport'])){
         echo $_SESSION['passport'];
      }


     ?>


    " alt="passport" width="50%" class="img-circle"></div>
   <div class="row g-2">
    <div class="col-lg-12 col-md-12 col-12 mt-4 " >
    <div class=" input-group mb-3">
     <span class="input-group-text text-primary" id="basic-addon1">First Name</span>
    <input type="email" class="form-control"  aria-label="fname" name ="fname" value="<?php echo $_SESSION['firstName'];?>">
  </div>
      </div>

      <div class="col-lg-12 col-md-12 col-12 " >
         <div class=" input-group mb-3">
     <span class="input-group-text text-primary" id="basic-addon1">Last Name</span>
    <input type="email" class="form-control"  aria-label="lname" name ="lname" value="<?php echo $_SESSION['lastName'];?>">
  </div>
      </div>

      <div class="col-lg-12 col-md-12 col-12 " >
        <div class=" input-group mb-3">
     <span class="input-group-text text-primary" id="basic-addon1">E-mail</span>
    <input type="email" class="form-control"  aria-label="email" name ="email" value="<?php echo $_SESSION['email'];?>">
  </div></div>

        <div class="col-lg-12 col-md-12 col-12 " >
        <div class=" input-group mb-3">
     <span class="input-group-text text-primary" id="basic-addon1">faculty</span>
    <input type="email" class="form-control"  aria-label="faculty" name ="faculty" value="<?php echo $_SESSION['faculty'];?>">
  </div></div>

        <div class="col-lg-12 col-md-12 col-12" >
         <div class=" input-group mb-3">
     <span class="input-group-text text-primary" id="basic-addon1">Department</span>
    <input type="email" class="form-control"  aria-label="department" name ="department" value="<?php echo $_SESSION['department'];?>">
  </div>
      </div>
        <button class="btn btn-primary text-light" type="submit"><i class="fa fa-plus-square fa-2x"></i></button>
       
  </div></div></div>

<div class="col-lg-9 col-md-9 col-12 p-4"  >
  <div class="container-fluid" >
<div class="row">

  <div class="col-lg-3 col-md-4 col-12 mt-4"style="width: 18rem;" >
<div class="card" >
  <i class="fa fa-user-edit fa-5x text-center mt-2 text-primary"></i>
  <div class="card-body">
    <h5 class="card-title text-center">Aspirant Aplication</h5>
    <p class="card-text"></p>
    <a href="#" type="button" class="btn btn-primary align-center" data-bs-toggle="modal" data-bs-target="#exampleModal">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-4 col-12 mt-4"style="width: 18rem;" >
<div class="card" >
 <i class="fa fa-graduation-cap fa-5x text-center text-primary"></i>
  <div class="card-body">
    <h5 class="card-title text-center">Postgraduate Aplication</h5>
    <p class="card-text"></p>
    <a href="#"  type="button" class="btn btn-primary align-center" data-bs-toggle="modal" data-bs-target="#pgModal">Go somewhere</a>
  </div>
</div>
</div>



<div class="col-lg-3 col-md-4 col-12 mt-4"style="width: 18rem;" >
<div class="card" >
  <i class="fa fa-user-plus fa-5x text-center text-primary mt-2"></i>
  <div class="card-body">
    <h5 class="card-title text-center">Staff Aplication</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary align-center">Go somewhere</a>
  </div>
</div>
</div>



  <div class="col-lg-3 col-md-4 col-12 mt-4 " style="width: 18rem;" >
<div class="card" >
  <i class="fa fa-user-graduate fa-5x text-center text-primary mt-2"></i>
  <div class="card-body">
    <h5 class="card-title text-center">Undergraduate Management</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary align-center">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-4 col-12 mt-4"style="width: 18rem;" >
<div class="card" >
  <i class="fas fa-user-graduate fa-5x text-center text-primary mt-2"></i>
  <div class="card-body">
    <h5 class="card-title text-center">P.G Management</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary align-center">Go somewhere</a>
  </div>
</div>
</div>


<div class="col-lg-3 col-md-4 col-12 mt-4"style="width: 18rem;" >
<div class="card" >
  <i class="fa fa-user-friends fa-5x text-center text-primary mt-2"></i>
  <div class="card-body">
    <h5 class="card-title text-center">Staff Management</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary btn-align-center">Go somewhere</a>
  </div>
</div>
</div>


<div class="col-lg-3 col-md-4 col-12 mt-4"style="width: 18rem;" >
<div class="card" >
   <i class="fa fa-address-book fa-5x text-center text-primary mt-2"></i>
  <div class="card-body">
    <h5 class="card-title text-center">School Events</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary align-center">Go somewhere</a>
  </div>
</div>
</div>


<div class="col-lg-3 col-md-4 col-12 mt-4"style="width: 18rem;" >
<div class="card" >
  <i class="fa fa-bell fa-5x text-center text-primary mt-2"></i>
  <div class="card-body">
    <h5 class="card-title text-center">Blogs</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary align-center">Go somewhere</a>
  </div>
</div>

</div>
<div class="col-lg-3 col-md-4 col-12 mt-4"style="width: 18rem;" >
<div class="card" >
  <i class="fa fa-book-open fa-5x text-center text-primary mt-2"></i>
  <div class="card-body">
    <h5 class="card-title text-center">Course Management</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary align-center">Go somewhere</a>
  </div>
</div>
</div>









  
 </div></div></div>

 </div></div> 



 Button trigger modal

<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aspirants Application Management</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       


    <div class="table-responsive-md" id="dataTable">
    <table class="table  " style="overflow-x:hidden;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Other Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E-mail</th>
     
      <th scope="col">Faculty</th>
      <th scope="col">Department</th>
       <th scope="col" colspan="2">action</th>
      
    </tr>

  </thead>

  <tbody>
     <?php 
     while ( $arr2 = mysqli_fetch_array($result)) {
       
     ?>
    <tr>
      <td><?php echo $arr2['id']; ?></td>
      <td><?php echo $arr2['fname']; ?></td>
      <td><?php echo $arr2['oname']; ?></td>
      <td><?php echo $arr2['lname']; ?></td>
      <td><?php echo $arr2['email']; ?></td>
      <td><?php echo $arr2['faculty']; ?></td>
      <td><?php echo $arr2['department']; ?></td>
       <td ><input type="button" name="View" value="view" id="<?php echo $arr2['id'] ?>" class = "btn btn-info btn-xs view_data mt-2">

       <input type="button" name="View" value="Delete" id="<?php echo $arr2['id'] ?>" class = "btn btn-danger btn-xs view_data mt-2">

       <input  name="approve" value="approve" type="button"   id="<?php echo $arr2['id'] ?>" class = "btn btn-danger btn-xs approve mt-2">


     </td>
     

    </tr>
    <?php
  }
    ?>
  </tbody>
</table></div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary align-center">Save changes</button>
      </div>
    </div>
  </div>
</div>          
        






<div class="modal fade" id="stData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aspirants Application Management</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <div class="container-fluid  table-responsive-mdb"  id="student_details">
           
     
        
      </div>
       <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
         
        
      </div>
    </div>
  </div>
</div>
     </div>






       <div class="modal fade" id="stOlevel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aspirants Document</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body ">
        <div class="container-fluid"  id="olevel">

        
        </div>
       <div class="modal-footer">
        
       
      </div>
    </div>
  </div>
</div>
     </div>




      


<div class="modal fade" id="pgModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aspirants Application Management</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       


    <div class="table-responsive-md" id="pgdataTable">
    <table class="table  " style="overflow-x:hidden;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Other Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E-mail</th>
     
      <th scope="col">Faculty</th>
      <th scope="col">Department</th>
       <th scope="col" colspan="2">action</th>
      
    </tr>

  </thead>

  <tbody>
     <?php 
     while ( $arr_pg = mysqli_fetch_array($pg_result)) {
       
     ?>
    <tr>
      <td><?php echo $arr_pg['id']; ?></td>
      <td><?php echo $arr_pg['fname']; ?></td>
      <td><?php echo $arr_pg['oname']; ?></td>
      <td><?php echo $arr_pg['lname']; ?></td>
      <td><?php echo $arr_pg['email']; ?></td>
      <td><?php echo $arr_pg['faculty']; ?></td>
      <td><?php echo $arr_pg['department']; ?></td>
       <td ><input type="button" name="View" value="view" id="<?php echo $arr_pg['id'] ?>" class = "btn btn-info btn-xs pg_data mt-2">

       <input type="button" name="View" value="Delete" id="<?php echo $arr_pg['id'] ?>" class = "btn btn-danger btn-xs pg_data mt-2">

       <input  name="approve" value="approve_pg" type="button"   id="<?php echo $arr_pg['id'] ?>" class = "btn btn-danger btn-xs approve_pg mt-2">


     </td>
     

    </tr>
    <?php
  }
    ?>
  </tbody>
</table></div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary align-center">Save changes</button>
      </div>
    </div>
  </div>
</div>          



      <div class="modal fade" id="pgData1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aspirants Application Management</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <div class="container-fluid  table-responsive-mdb"  id="pg_details">
           
     
        
      </div>
       <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
         
        
      </div>
    </div>
  </div>
</div>
     </div>


</body>








    
  
















       <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="bootstrap.min.js"></script>
 -->