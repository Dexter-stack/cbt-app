<?php 
session_start();
include("db.php");

if(isset($_POST['load'])){

	$question_no = "";
	$question="";
	$opt1 ="";
	$opt2 ="";
	$opt3 ="";
	$opt4 ="";
	$answer ="";
	$count = 0;
	$ans="";
	$out="";
	$examca = $_POST['examcat'];

	$queno = $_POST['questionsno'];
	if(isset($_SESSION['answer'][$queno])){
		$ans =$_SESSION['answer'][$queno];
	}
	$query = "SELECT * FROM que  WHERE category = '$examca' && question_no = $_POST[questionsno]  "; 

	$result = mysqli_query($connection, $query);

	$count=  mysqli_num_rows($result);


	if ($count==0) {
		
		echo "over";
	}else{

       while ($row = mysqli_fetch_array($result)) {
       	$question_no = $row['question_no'];
       	$question = $row['question'];
       	$opt1 = $row['opt1'];
       	$opt2 = $row['opt2'];
       	$opt3 = $row['opt3'];
       	$opt4 = $row['opt4'];
       	$_SESSION['question_no'] = $question_no;

       }
       ?>

<!-- 
    //       $out .=   '<h5>'.$question.'</h5>
				// <hr />
				// <br />
				// <div class="row">
				// <div class="col-md-6" style="margin-bottom:32px;">

				// 		<div class="radio">
				// 			<label><h4><input type="radio" name="r1" id="r1" value="'.$opt1.'"    />&nbsp;'.$opt1.'</h4></label>
				// 		</div>
				// 	</div>


				// 	<div class="col-md-6" style="margin-bottom:32px;">
				// 		<div class="radio">
				// 			<label><h4><input type="radio" name="r1" id="r1" value="'.$opt2.'"/>&nbsp;'.$opt2.'</h4></label>
				// 		</div>
				// 	</div>


				// 	<div class="col-md-6" style="margin-bottom:32px;">
				// 		<div class="radio">
				// 			<label><h4><input type="radio" name="r1" id="r1" value="'.$opt3.'"/>&nbsp;'.$opt3.'</h4></label>
				// 		</div>
				// 	</div>

				// 	<div class="col-md-6" style="margin-bottom:32px;">
				// 		<div class="radio">
				// 			<label><h4><input type="radio" name="r1" id="r1" value="'.$opt4.'"/>&nbsp;'.$opt4.'</h4></label>
				// 		</div>
				// 	</div></div>


				// ';

				
    //  echo $out;
 -->



            


                <h5><?php echo $question; ?></h5>
				<hr />
				<br />
				<div class="row">
				<div class="col-md-6" style="margin-bottom:32px;">

						<div class="radio">
							<label><h4><input type="radio" name="r1" id="r1" class="rad" value="<?php echo $opt1 ; ?>"

                             <?php 
                           if ($ans==$opt1) {
                           	echo "checked";
                           }



                             ?>


								>&nbsp;<?php echo $opt1 ; ?></h4></label>
						</div>
					</div>


					<div class="col-md-6" style="margin-bottom:32px;">

						<div class="radio">
							<label><h4><input type="radio" name="r1" id="r1" class="rad" value="<?php echo $opt2 ; ?>"

                             <?php 
                           if ($ans==$opt2) {
                           	echo "checked";
                           }



                             ?>


								/>&nbsp;<?php echo $opt2 ; ?></h4></label>
						</div>
					</div>


					<div class="col-md-6" style="margin-bottom:32px;">

						<div class="radio">
							<label><h4><input type="radio" name="r1" id="r1" class="rad" value="<?php echo $opt3 ; ?>"

                             <?php 
                           if ($ans==$opt3) {
                           	echo "checked";
                           }



                             ?>


								/>&nbsp;<?php echo $opt3 ; ?></h4></label>
						</div>
					</div>

					<div class="col-md-6" style="margin-bottom:32px;">

						<div class="radio">
							<label><h4><input type="radio" name="r1" id="r1" class="rad" value="<?php echo $opt4 ; ?>"

                             <?php 
                           if ($ans==$opt4) {
                           	echo "checked";
                           }



                             ?>


								/>&nbsp;<?php echo $opt4 ; ?></h4></label>
						</div>
					</div>






















<?php



	}




	




}


//load navigation


if (isset($_POST['navigation'])) {
	$examc = $_POST['examcat'];

	$sl = "SELECT * FROM que  WHERE category ='$examc'";
$re = mysqli_query($connection, $sl);
$total = mysqli_num_rows($re);

	



	for($count=1; $count<=$total; $count++ )  
      {
        echo '
        <div class="col-2 px-3" style="margin-bottom:10px;">
          <input type="button" class="btn btn-primary btn-lg question_nav" id="'.$count.' " value="'.$count.'">
        </div>
        ';
        
      }
}



























?>