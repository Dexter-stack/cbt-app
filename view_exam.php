<?php
session_start(); 



 
$duration = (int)$_SESSION['examtime'] . ' minute';
$exam_end_time = strtotime( $duration);

$exam_end_time = date('Y-m-d H:i:s', $exam_end_time);
$remaining_minutes = strtotime($exam_end_time) - time();







?>









<!DOCTYPE html>
<html>
<head>
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




   <style type="text/css">
       
   a{
        text-decoration: none;
        color: white;
    }
    .btnc{
        background-color:  #04323A;
        
    }
    .text{
        color:  #04323A;

    }

   </style>

</head>
<body>


  <?php

include('userheader.php');


  ?>

  
<div class="container-fluid">
<div class="row">


 <div class="col-md-4 col-12 p-3 ">
  <!--   <br /> -->
     <div align="center">
      <div id="exam_timer"  data-timer="<?php echo $remaining_minutes; ?>" style="max-width:400px; width: 100%; height: 200px;"></div>
    </div>
    <br />
    
    <div class="card">
        <div class="card-header">User Details</div>
        <div class="card-body">
          <!-- <div class="row">
     
        <div class="col-md-3"> -->
          <!-- <img src="upload" class="img-fluid" /> -->
      <!--   </div> -->
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
              <th>Questions</th>
              <td id="questions_no"></td>
            </tr>
          </table>
        </div>
        
    </div></div></div>
  <!-- </div> -->


  <div class="col-md-8 col-12 p-3 ">
    <div class="card">
      <div class="card-header"><?php echo $_SESSION['examcat']; ?>
        

     <div id="total_que" style="float:right;">0</div>
        <div  style="float:right;">/</div>
        
        <div id="current" style="float:right;">0</div>

      </div>

      
      <div class="card-body">
       
        <div id="load_question"></div>
         
      </div>
    </div>
    <br />
    <div id="question_navigation_area">

      <div align="center">
              <input type="button" name="previous" class=" btn-info p-3 m-2  rounded-pill previous"  value="previous"  >
              <input type="button" name="next" class=" btn-warning p-3 rounded-pill next " value="next" >
            </div>



            <div class="card">
        <div class="card-header">Question Navigation</div>
        <div class="card-body">
          <div class="row"  id="navigation">






<!-- 
      //    for($count=1; $count<=$_SESSION['total_que']; $count++ )  
      // {
      //   echo '
      //   <div class="col-1" style="margin-bottom:10px;">
      //     <button type="button" class="btn btn-primary btn-lg question_nav" id="'.$count.'">'.$count.'</button>
      //   </div>
      //   ';
        
      // } -->




















        



</div>
      </div></div>





    </div>
  </div>
 
</div>

</div>








 <?php
include('footer.php');


  ?>

   <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<script src="bootstrap.min.js"></script> 



<script type="text/javascript">

  $(document).ready(function(){
  

    var examcat = "<?php echo $_SESSION['examcat']; ?>";
   
    //var questions_no = "1";
    var load  ="load";
    var total =0;
    var navigation ="navigation";
    // var valuee="";
     
   

    
   








 



 // $(document).on('click','.Start',function(){
 //  var course = $(this).attr("id");
  

 //   $.ajax({

 //      url : "exam_action.php",
 //      method :"POST",
 //      data:{
 //       course:course
        

 //      },
 //      success:function(data){
 //        // alert(data);


 //        window.location.href = "view_exam.php";
       
        
 //     }

 // });

 //    });
  

 //total questions
   function questions_no()
  {
 $.ajax({
      url:"examAct.php",
      method:"POST",
      data:{examcat:examcat},
      success:function(data)
      {
        
         $('#questions_no').html(data);
        $('#total_que').html(data);
        total = eval($('#total_que').text());
      }
    });





  }

 
 







 






   





 
   var questionsno ="1";
    load_nav();
   
  load_question(questionsno);
 
  

  
 


 

function load_question(questionsno)
  {

$('#current').html(questionsno);
   
    $.ajax({
      url:"loadQuestion.php",
      method:"POST",
      data:{examcat:examcat,questionsno:questionsno,load:load},
      success:function(data)
      {
      
  
       

       if(data == "over"){

       

       }else{
        
       
        // $('#current_que').html("gg");
         $('#load_question').html(data);
       
         questions_no();
         
          //alert("hello");


       }



      }
    });
  }

 


function load_nav(){


   $.ajax({
      url:"loadQuestion.php",
      method:"POST",
      data:{examcat:examcat,navigation:navigation},
      success:function(data)
      {
      
  
        $('#navigation').html(data);



      }
    });

}

 

 $(document).on('click','.next',function(){

  load_next();

});




  $(document).on('click','.previous',function(){
 
  
    load_previous();

});



  



   








  function load_previous(){



  if(questionsno=="1"){
  load_question(questionsno);


}else{
  questionsno= eval(questionsno)-1;
  load_question(questionsno);
}



}



function load_next(){

  // alert(total);

 if (questionsno<total) {
  questionsno= eval(questionsno)+1;
  load_question(questionsno);

 }else{
   questionsno ="1";
  load_question(questionsno);

 }

 

}


// function  radioclick(radiovalue , questionsno){


//    $.ajax({
//       url:"saveAnswer.php",
//       method:"POST",
//       data:{questionsno:questionsno,valuee:valuee},
//       success:function(data)
//       {
      
  
//         $('#navigation').html(data);



//       }
//     });


// }









$(document).on('click','.question_nav',function(){
     
    questionsno =  $(this).val();


     load_question(questionsno);

});





$(document).on('click','.rad',function(){

      
    var questionsno =$('#current').text();
    var id = '#'+questionsno;
    var valuee  =  $(this).val();
    var idd = $('.question_nav').attr('id');
     alert(questionsno);


    $.ajax({
         url:"saveAnswer.php",
         method:"POST",
         data:{
           questionsno:questionsno,
           valuee:valuee

         },
         success:function(data){

          
          // $('#email').css("border","2px solid green");

         
         }








     });


    

});






  










  $("#exam_timer").TimeCircles({ 
    time:{
      Days:{
        show: false
      },
      Hours:{
        show: true
      }
    }
  });

  setInterval(function(){
    var remaining_second = $("#exam_timer").TimeCircles().getTime();
   if(remaining_second<1){
    
    window.location.href = "result.php";

    }
  }, 1000);







   });



  </script>




</body>
