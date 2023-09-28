<?php
session_start();
include("db.php");


$sql = "SELECT * FROM exam ";

$result = mysqli_query($connection, $sql);
















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
   


            <?php include('userheader.php'); ?>
        


     </div>
 </div>
 


           
                
               <!--  <div class="progress">
                    <ul>
                        <li><a href="#">Lessons</a></li>
                        <li><a href="#">In Progress</a></li>
                        <li><a href="#">Completed</a></li>
                    </ul>
                    <hr>
                </div> -->
           <?php 

           while ($arr = mysqli_fetch_array($result)) {
               
           

             ?>
              
                 <div class="lessons mt-5 py-3" style="background-color:  #fffdf7;">
                    <div class="flex-a ">
                        <h3><?php echo "Exam Duration : ".$arr['examtime']." Minutes"; ?></h3>
                        <hr>
                        <p><strong><?php echo $arr['examcat']; ?></strong></p>
                    </div>
                    <div class="flex-b">
                        <input type="button" name="course" value="Start" id="<?php echo $arr['examcat'] ?>" class = "btn btn-info btn-xs Start mt-2" >
                    </div>
                </div>

    <?php
  }
    ?>


               

              <!--   <div class="lessons space">
                    <div class="flex-a">
                        <h3>Lesson 2</h3>
                        <hr>
                        <p><strong>Atomic Physics Practice Question</strong></p>
                    </div>
                    <div class="flex-b">
                        <a href="#" class="btn">Start</a>
                    </div>
                </div>

                <div class="lessons space">
                    <div class="flex-a">
                        <h3>Lesson 3</h3>
                        <hr>
                        <p><strong>Atomic Physics Practice Question</strong></p>
                    </div>
                    <div class="flex-b">
                        <a href="#" class="btn">Start</a>
                    </div>
                </div> -->
       
    

   <!--  <footer>
         <div class="foot-links">
        <div class="row">
          
          <div class="col-lg-4 col-md-4 col-12">
            <div class="link-1">
                <h4>Quick Links</h4>
                <hr>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Classroom</a></li>
                    <li><a href="#">Ask a Question</a></li>
                    <li><a href="#">Connect2me</a></li>
                    <li><a href="#">Groups</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
     <div class="col-lg-4 col-md-4 col-12">
            <div class="link-2">
                <h4>Explore</h4>
                <hr>
                <ul>
                    <li><a href="#">JAMB Past Questions Software</a></li>
                    <li><a href="#">Post-UTME Past Questions Papers</a></li>
                    <li><a href="#">Post-UTME Software for CBT</a></li>
                    <li><a href="#">Post-UTME Past Questions Agent</a></li>
                    <li><a href="#">Project Topics & Materials</a></li>
                </ul>
            </div></div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="link-3">
                <h4>Connect with us</h4>
                <hr>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Classroom</a></li>
                    <li><a href="#">Ask a Question</a></li>
                    <li><a href="#">Connect2me</a></li>
                    <li><a href="#">Groups</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <p class="copyright">&copy; Mustapha 2021</p></div>
    </footer> -->

</div>
<?php
include("footer.php");
?>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="bootstrap.min.js"></script> 



<script type="text/javascript">
  
$(document).ready(function(){

 $(document).on('click','.Start',function(){
  var course = $(this).attr("id");
  

   $.ajax({

      url : "exam_action.php",
      method :"POST",
      data:{
       course:course
        

      },
      success:function(data){
        // alert(data);


        window.location.href = "view_exam.php";
       
        
     }

 });

    });







    });

</script>
</body>
</html>