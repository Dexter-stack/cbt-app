<?php
include("db.php");

$query = "SELECT * FROM exam ";
$result = mysqli_query($connection, $query);
$res = mysqli_query($connection, $query);




?>
<!DOCTYPE html>
<html>

<head>
    <title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/​jquery.min.js"></script>





    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/icon/css/all.css" rel="stylesheet">
    <link href="/icon/webfonts/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  
    <style type="text/css">
        a {
            text-decoration: none;
            color: white;
        }

        .btnc {
            background-color: navy;

        }

        .text {
            color: navy;

        }

        /*
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
        /* display: block;
    transition: 0.3s;
    } */

        li {
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
            .sidenav {
                width: 50%;
            }

            .sidenav a {
                font-size: 18px;
            }

        }
    </style>

</head>

<body>

    <?php include("header.php"); ?>

    <div class="container-fluid mt-5 ">

        <div class="row">


            <div class="container-fluid col-lg-3 col-md-3 col-12 ">

                <div class="p-4">
                    <h3>Admin Profile</h3>

                    <div><img src="<?php
                                    if (isset($_SESSION['passport'])) {
                                        echo $_SESSION['passport'];
                                    } ?>" alt="passport" width="50%" class="img-circle"></div>
                    <div class="row g-2">
                        <div class="col-lg-12 col-md-12 col-12 mt-4 ">
                            <div class=" input-group mb-3">
                                <span class="input-group-text text-primary" id="basic-addon1">First Name</span>
                                <input type="email" class="form-control" aria-label="fname" name="fname" value="<?php echo $_SESSION['firstName']; ?>" disabled>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12 ">
                            <div class=" input-group mb-3">
                                <span class="input-group-text text-primary" id="basic-addon1">Last Name</span>
                                <input type="email" class="form-control" aria-label="lname" name="lname" value="<?php echo $_SESSION['lastName']; ?>" disabled>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12 ">
                            <div class=" input-group mb-3">
                                <span class="input-group-text text-primary" id="basic-addon1">E-mail</span>
                                <input type="email" class="form-control" aria-label="email" name="email" value="<?php echo $_SESSION['email']; ?>" disabled>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12 ">
                            <div class=" input-group mb-3">
                                <span class="input-group-text text-primary" id="basic-addon1">faculty</span>
                                <input type="email" class="form-control" aria-label="faculty" name="faculty" value="<?php echo $_SESSION['faculty']; ?>" disabled>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class=" input-group mb-3">
                                <span class="input-group-text text-primary" id="basic-addon1">Department</span>
                                <input type="email" class="form-control" aria-label="department" name="department" value="<?php echo $_SESSION['department']; ?>" disabled>
                            </div>
                        </div>
                        <button class="btn btn-primary text-light" type="submit"><i class="fa fa-plus-square fa-2x"></i></button>

                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-12 p-4">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-3 col-md-4 col-12 mt-4" style="width: 18rem;">
                            <div class="card">
                                <i class="fa fa-user-edit fa-5x text-center mt-2 text-primary"></i>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Add Exams</h5>
                                    <p class="card-text"></p>
                                    <center> <a href="#" type="button" class="btn btn-primary align-center" data-bs-toggle="modal" data-bs-target="#exampleModal">Click Here</a></center>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-12 mt-4" style="width: 18rem;">
                            <div class="card">
                                <i class="fa fa-graduation-cap fa-5x text-center text-primary"></i>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Add Questions</h5>
                                    <p class="card-text"></p>
                                    <center><a href="#" type="button" class="btn btn-primary align-center add_que">Click Here</a></center>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-3 col-md-4 col-12 mt-4" style="width: 18rem;">
                            <div class="card">
                                <i class="fa fa-user-plus fa-5x text-center text-primary mt-2"></i>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Users Management</h5>
                                    <p class="card-text"></p>
                                    <a href="#" class="btn btn-primary align-center">Go somewhere</a>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-3 col-md-4 col-12 mt-4 " style="width: 18rem;">
                            <div class="card">
                                <i class="fa fa-user-graduate fa-5x text-center text-primary mt-2"></i>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Admin Management</h5>
                                    <p class="card-text"></p>
                                    <center> <a href="#" class="btn btn-primary align-center">Click Here</a></center>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-12 mt-4" style="width: 18rem;">
                            <div class="card">
                                <i class="fas fa-user-graduate fa-5x text-center text-primary mt-2"></i>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Result Management</h5>
                                    <p class="card-text"></p>
                                    <center> <a href="#" class="btn btn-primary align-center">Click Here</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include("footer.php");
    ?>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" style="background-color: rgba(128,128,128,0.1);
  box-shadow: 0 5px 15px rgba(0,0,0,.9);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Exam Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">







                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    Add Exam
                                </div>
                                <div class="card-body" id="examform">
                                    <div class="p-3 border-rounded">

                                        <label class="mt-4" id="label">New Exam Category</label>

                                        <input type="text" class="form-control " placeholder="Exam Cayegory" aria-label="Category" value="" name="examC" id="examCategory">

                                        <label class="mt-4 font-size-3" id="label2">Exam Time in Minutes</label>

                                        <input type="text" class="form-control " placeholder="Exam Time In Minutes" aria-label="time" value="" name="examT" id="examTime">

                                        <button class="btn btn-success mt-4" type="button" id="addexam">
                                            <span class="" role="" aria-hidden="true"></span>
                                            <span class="visually-">Add Exam</span>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-6 col-12">

                            <div class="card">
                                <div class="card-header">
                                    Exam Category
                                </div>
                                <div class="card-body">

                                    <div class="table-responsive-sm" id="examTable">
                                        <table class="table table-bordered py-3" style="overflow-x:hidden;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Exam Name</th>
                                                    <th scope="col">Exam Time</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>



                                                </tr>

                                            </thead>

                                            <tbody>
                                                <?php
                                                while ($arr2 = mysqli_fetch_array($result)) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $arr2['id']; ?></td>
                                                        <td><?php echo $arr2['examcat']; ?></td>
                                                        <td><?php echo $arr2['examtime']; ?></td>

                                                        <td><input type="button" name="Update" value="Update" id="<?php echo $arr2['id'] ?>" class="btn btn-info btn-xs  mt-2"></td>

                                                        <td> <input type="button" name="View" value="Delete" id="<?php echo $arr2['id'] ?>" class="btn btn-danger btn-xs v mt-2 Delete"></td>




                                                        </td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade courseSelection" id="courseSelection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" style="background-color: rgba(128,128,128,0.1);
  box-shadow: 0 5px 15px rgba(0,0,0,.9);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Exam Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">










                    <div class="card">
                        <div class="card-header">
                            Exam Category
                        </div>
                        <div class="card-body">

                            <div class="table-responsive-sm" id="eTable">
                                <table class="table table-bordered py-3" style="overflow-x:hidden;">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Exam Time</th>
                                            <th scope="col">Select Exam</th>




                                        </tr>

                                    </thead>

                                    <tbody>
                                        <?php
                                        while ($arr3 = mysqli_fetch_array($res)) {

                                        ?>
                                            <tr>
                                                <td><?php echo $arr3['id']; ?> </td>
                                                <td><?php echo $arr3['examcat']; ?></td>
                                                <td><?php echo $arr3['examtime']; ?></td>



                                                <td><input type="button" name="View" value="Select" id="<?php echo $arr3['examcat'] ?>" class="btn btn-info btn-xs addQ mt-2">




                                                </td>


                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Questions Form  -->

    <div class="modal fade" id="addQue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" style="background-color: rgba(128,128,128,0.1);
  box-shadow: 0 5px 15px rgba(0,0,0,.9);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Exam Category</h5>
                    <button class="btn  btn-close back " id="back"></button>

                </div>
                <div class="modal-body">







                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <center>
                                        <h3 id="course">Add Exam</h3>
                                    </center>
                                </div>
                                <div class="card-body" id="examform">
                                    <div class="p-3 border-rounded">

                                        <label class="mt-4" id="label">Question</label>

                                        <!-- <input type="text" class="form-control " placeholder="Type your Question here" aria-label="Question" value="" name="question" id="question"> -->
                                        <textarea id="summernote" class="" rows="2">Submit your text post here...</textarea>
                                        <label class="mt-4 font-size-3" id="label2">Option 1</label>

                                        <input type="text" class="form-control " placeholder="Option 1" aria-label="Option1" value="" name="opt1" id="opt1">

                                        <label class="mt-4 font-size-3" id="label2">Option 2</label>

                                        <input type="text" class="form-control " placeholder="Option 2" aria-label="Option2" value="" name="opt2" id="opt2">

                                        <label class="mt-4 font-size-3" id="label2">Option 3</label>

                                        <input type="text" class="form-control " placeholder="Option 3" aria-label="Option3" value="" name="opt3" id="opt3">

                                        <label class="mt-4 font-size-3" id="label2">Option 4</label>

                                        <input type="text" class="form-control " placeholder="Option 4" aria-label="Option4" value="" name="opt4" id="opt4">

                                        <label class="mt-4 font-size-3" id="label2">Answer</label>

                                        <input type="text" class="form-control " placeholder="Answer" aria-label="Answer" value="" name="answer" id="answer">

                                        <label class="mt-4 font-size-3" id="label2">Answer</label>

                                        <input type="text" class="form-control " placeholder="Category" aria-label="Answer" value="" name="category" id="category" disabled="">


                                        <button class="btn btn-success mt-4 addquestion" type="button" id="addquestion">
                                            <span class="" role="" aria-hidden="true"></span>
                                            <span class="visually-">Add Question</span>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <center>
                                        <h3 id="course1">Add Exam</h3>
                                    </center>
                                </div>
                                <div class="card-body" id="examform">
                                    <div class="p-3 border-rounded">

                                        <label class="mt-4" id="label">Question</label>

                                        <input type="text" class="form-control " placeholder="Type your Question here" aria-label="Question" value="" name="question" id="question">

                                        <label class="mt-4 font-size-3" id="label2">Option 1</label>

                                        <input type="file" class="form-control " placeholder="Option 1" aria-label="Option1" value="" name="opt1" id="opt1">

                                        <label class="mt-4 font-size-3" id="label2">Option 2</label>

                                        <input type="file" class="form-control " placeholder="Option 2" aria-label="Option2" value="" name="opt2" id="opt2">

                                        <label class="mt-4 font-size-3" id="label2">Option 3</label>

                                        <input type="file" class="form-control " placeholder="Option 3" aria-label="Option3" value="" name="opt3" id="opt3">

                                        <label class="mt-4 font-size-3" id="label2">Option 4</label>

                                        <input type="file" class="form-control " placeholder="Option 4" aria-label="Option4" value="" name="opt4" id="opt4">

                                        <label class="mt-4 font-size-3" id="label2">Answer</label>

                                        <input type="file" class="form-control " placeholder="Answer" aria-label="Answer" value="" name="answer" id="answer">
                                        <label class="mt-4 font-size-3" id="label2">Answer</label>

                                        <input type="text" class="form-control " placeholder="Category" aria-label="Answer" value="" name="category" id="category1" disabled="">
                                        <button class="btn btn-success mt-4" type="button" id="addquestionimg">
                                            <span class="" role="" aria-hidden="true"></span>
                                            <span class="visually-">Add Question</span>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>













        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <!-- <script src="ckeditor/ckeditor.js"></script> -->


        <script type="text/javascript">
            
            $(document).ready(function() {
                // CKEDITOR.replace('editor1');
                $('#summernote').summernote();
                // $('#summernote').dropdwn();
               
                // alert("hello");


                $("#login").text("logout");
                $('#Signup').hide();

                $("#addexam").click(function() {

                    var examC = $('#examCategory').val();
                    var examT = $('#examTime').val();
                    var save = "save";



                    if (examC == "") {
                        $("#examCategory").css('border', "solid 2px red");
                        $("#label").html('<label class="text-danger">Exam Category is empty</label>')
                    } else if (examT == "") {
                        $("#examTime").css('border', "solid 2px red");
                        $('#label2').html('<label class="text-danger">Exam Time is empty</label>')

                    } else {
                        $("#examCat").css('border', " solid 1px black ");
                        $("#examT").css('border', " solid 1px black ");
                        $("#label").html('<label class="text-dark">Exam Category</label>')
                        $('#label2').html('<label class="text-dark">Exam Time</label>')

                        $.ajax({

                            url: "action.php",
                            method: "POST",
                            data: {
                                eName: examC,
                                eTime: examT


                            },
                            success: function(data) {
                                if (data == "yes") {


                                } else {
                                    alert("Successfully saved");

                                    $('#examTime').val("");
                                    $('#examCategory').val("");
                                    $("#examTable").html(data);


                                    //setTimeout('window.location.href= "cbtHome.php";',3000);
                                }
                            }




                        });

                    }


                });

                //this shows questions modal

                $(document).on('click', '.addQ', function() {
                    var course = $(this).attr("id");

                    $('#course').text(course + " Text Questions");
                    $('#course1').text(course + " Image Questions");
                    $('#category').val(course);
                    $('#category1').val(course);
                    $('#addQue').modal('show');


                });
                // this close Questions modal and back to selection modal

                $(document).on('click', '.back', function() {
                    $('#addQue').modal('hide');
                    $('#courseSelection').modal('show');

                });

                $("#addquestion").click(function() {

                    var questions = $("#summernote").val();
                    // var questions = CKEDITOR.instances['editor1'].getData();
           alert(questions);
                    var opt1 = $('#opt1').val();
                    var opt2 = $('#opt2').val();
                    var opt3 = $('#opt3').val();
                    var opt4 = $('#opt4').val();
                    var answer = $('#answer').val();
                    var category = $('#category').val();

                    if (questions == "") {
                        alert("Questions field is empty")

                    } else if (opt1 == "") {
                        alert('option 1 is empty');
                    } else if (opt2 == "") {
                        alert('option 2 is empty');

                    } else if (opt3 == "") {

                        alert("option 3 is empty");
                    } else if (opt4 == "") {
                        alert("option 4 is empty");

                    } else if (answer == "") {
                        alert("answer field is empty");
                    } else {

                        $.ajax({

                            url: "action.php",
                            method: "POST",
                            data: {
                                questions: questions,
                                opt1: opt1,
                                opt2: opt2,
                                opt3: opt3,
                                opt4: opt4,
                                answer: answer,
                                category: category


                            },
                            success: function(data) {
                                alert(data);

                                if (data == "Yes") {

                                    alert("questions uploaded successfully");

                                    $('#opt1').val("");
                                    $('#opt2').val("");
                                    $('#opt3').val("");
                                    $('#opt4').val("");
                                    $('#question').val("");
                                    $('#answer').val("");



                                } else {

                                    alert("Error occured while upoading Question");


                                }

                            }







                        });
                    }





                });


                //this code of exam delete button
                $(document).on('click', ".Delete", function() {


                    var ex_id = $(this).attr("id");
                    $.ajax({

                        url: "action.php",
                        method: "POST",
                        data: {
                            ex_id: ex_id
                        },
                        success: function(data) {
                            alert("Deleted Successfully");
                            $('#examTable').html(data);
                        }






                    });



                });


                $(document).on('click', '.add_que', function() {
                    // alert("hello");

                    var add_que = "add";
                    $.ajax({

                        url: "action.php",
                        method: "POST",
                        data: {
                            add_que: add_que
                        },
                        success: function(data) {

                            $('#eTable').html(data);
                            $('.courseSelection').modal('show');

                        }
                    });

                });












            });
        </script>



</body>

</html>