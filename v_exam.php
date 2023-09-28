<?php
session_start();
include("db.php");



$duration = (int)$_SESSION['examtime'] . ' minute';
$exam_end_time = strtotime($duration);

$exam_end_time = date('Y-m-d H:i:s', $exam_end_time);
$remaining_minutes = strtotime($exam_end_time) - time();

// if(isset($_POST['load'])){

$examca = $_SESSION['examcat'];

$question_no = "";
$question = "";
$opt1 = "";
$opt2 = "";
$opt3 = "";
$opt4 = "";
$answer = "";
$count = 0;
$ans = "";
$out = "";
$array = array();
//$examca = $_POST['examcat'];

$queno = $_POST['questionsno'];
if (isset($_SESSION['answer'][$queno])) {
  $ans = $_SESSION['answer'][$queno];
}
$query = "SELECT * FROM que  WHERE category = '$examca' ";



$result2 = mysqli_query($connection, $query);

$count =  mysqli_num_rows($result2);



while ($row = mysqli_fetch_assoc($result2)) {
  $array[] = $row;
}
$length = sizeof($array);



//  }








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
    a {
      text-decoration: none;
      color: white;
    }

    .btnc {
      background-color: #04323A;

    }

    .text {
      color: #04323A;

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
          <div id="exam_timer" data-timer="<?php echo $remaining_minutes; ?>" style="max-width:400px; width: 100%; height: 200px;"></div>
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

          </div>
        </div>
      </div>
      <!-- </div> -->


      <div class="col-md-8 col-12 p-3 ">
        <div class="card">
          <div class="card-header"><?php echo $_SESSION['examcat']; ?>


            <div id="total_que" style="float:right;">0</div>
            <div style="float:right;">/</div>

            <div id="current" style="float:right;">0</div>

          </div>


          <div class="card-body">

            <div id="load_question">

              <h5 id="question_body"></h5>
              <hr /><br />
              <div class="row">
                <div id="option_cont"></div>
              </div>

            </div>


          </div>
        </div>
        <br />
        
          <div align="center" class="">
            <button type="button" name="previous" class=" btn-info p-2  mx-5 rounded previous" value="previous" style="color:#fffdf7; background-color: #04323A;">previous</button>
            <button type="button" name="next" class=" btn-info  p-2  rounded next " value="next" style="color:#fffdf7; background-color: #04323A;">next</button>
          </div>



          <div class="card my-4">
            <div class="card-header">Question Navigation</div>
            <div class="card-body">
              <div class="row" id="navigation">







       























              </div>
            </div>
          





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
    $(document).ready(function() {




      var examcat = "<?php echo $_SESSION['examcat']; ?>";
      var total = <?php echo $length; ?>;
      var tempArray = <?php echo json_encode($array); ?>;
      let selected_options = [];



      //var questions_no = "1";
      var load = "load";
      // var total =0;
      var navigation = "navigation";
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


      load_nav();

      //on clicking next button
      $(document).on('click', '.next', function() {
        //  alert(selected_options.length);
        load_next();

      });
      //on clicking each options 
      $(document).on('click', '.option', function() {
        // alert('here');
        var question_no = eval($(this).attr("id"));
        // alert($('input[name='+question_no+']').val());
        $('input[name='+question_no+']').css('background','#E30B5C');
        check_question(question_no);
      });

      // on clicking previous button
      $(document).on('click', '.previous', function() {
        load_previous();
      });

      //on clicking each nav button
      $(document).on('click', '.question_nav', function() {
        // alert('here');

        var id = $(this).attr("id");
        load_question(eval(id));

      });



      // loads questions navigation bar
      function load_nav() {
        

        for (let index = 0; index < tempArray.length; index++) {
          $('#navigation').append('<div class="col-2 px-3 " style="margin-bottom:10px;"><input type="button" class="btn btn-primary  question_nav" name= "'+index+'" id="' + index + '" value="' + eval(index + 1) + '"></div>');

        }




      }











      $("#exam_timer").TimeCircles({
        time: {
          Days: {
            show: false
          },
          Hours: {
            show: true
          }
        }
      });

      setInterval(function() {
        var remaining_second = $("#exam_timer").TimeCircles().getTime();
        if (remaining_second < 1) {

          window.location.href = "result.php";

        }
      }, 1000);




      var question_no = 0;
      // this loads the first question on loading the page
      load_question(question_no);

      function load_question(question_no) {
        // alert(total);
        // array that stores question 
        var d = tempArray;
        // html body to hold both question and options
        var option = "";
        var check = "";

        // alert(d[question_no]['id']);
        // $('#load_question').html(d[question_no]['question']);
        const question = tempArray[question_no]['question'];
        $('#question_body').html(question);

        // body += '<h5>' + question + '</h5><hr /><br /><div class="row">';
        const opts = [tempArray[question_no]['opt1'], tempArray[question_no]['opt2'], tempArray[question_no]['opt3'], tempArray[question_no]['opt4']]
        opts.forEach(function(opt, index, array) {
          const opt_id = opt + question_no;

          option += ' <div class="radio"><label><h4><input type="radio" name="option" id="' + question_no + '" class="option" value="' + opt + '"  ' + check + '>&nbsp;' + opt + '</h4></label>	</div></div>';


        });

        //appends the options
        $('#option_cont').html(option);
        var que_no = eval(question_no + 1);
        //current question number
        $('#current').html(que_no);
        //total questions nnumber
        $('#total_que').html(total);
        // checks previously selected option
        check_previously(question_no);
      }


      // loads next questions
      function load_next() {

        // alert(total);

        if (question_no < total) {
          question_no = question_no + 1;
          load_question(question_no);

        } else {
          question_no = 0;
          load_question(question_no);

        }



      }
      // loads previous questions
      function load_previous() {



        if (question_no == 0) {
          load_question(question_no);


        } else {
          question_no = eval(question_no) - 1;
          load_question(question_no);
        }



      }

      // this checked the previous option selected
      function check_previously(question_no) {
        if (selected_options[question_no] !== undefined) {

          const optns = $('input[name=option]');
          for (let i = 0; i < optns.length; i++) {
            const optn = optns[i];
            if (optn.value === selected_options[question_no]) {
              optn.checked = true;
              break;
            }
          }

        }
      }

      //this function added selected options inside an array
      function check_question(question_no) {
        const selectedOption = $('input[name=option]:checked').val();
        if (selectedOption !== undefined) {
          selected_options[question_no] = selectedOption;
        }

      }










    });
  </script>




</body>