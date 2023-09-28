<?php

include("db.php");


if (isset($_POST['questions'])) {
    # code...
  $category = $_POST['category'];
  $loop = 0;
  $count =0;
   $sql = "SELECT * FROM que WHERE category = '$category' ORDER by id ASC";
   $mres = mysqli_query($connection, $sql);
   $count = mysqli_num_rows($mres);
   if ($count==0) {
     
   }else{

   while ($row = mysqli_fetch_array($mres)) {

    $loop =$loop +1;

    $sq = "UPDATE que set question_no ='$loop' WHERE id = $row[id]";
     
   }




   }

   $loop =$loop+1;
    $questions = $_POST['questions'];
    $opt1 = $_POST['opt1'];
    $opt2 = $_POST['opt2'];
    $opt3 = $_POST['opt3'];
    $opt4 = $_POST['opt4'];
    $answer = $_POST['answer'];
    

    $query = "INSERT INTO que (id,question_no,question,opt1,opt2,opt3,opt4,answer,category) VALUES(null,'$loop','$questions','$opt1','$opt2','$opt3','$opt4','$answer','$category')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        
        echo "Yes";
    }else{
        echo "No";
    }

}







//code for adding into the database backend

if(isset($_POST['eName'])){

    $eName = $_POST['eName'];
    $eTime = $_POST['eTime'];
    $sql = "INSERT INTO exam (id,examcat,examtime) VALUES(null,'$eName','$eTime')";
    $res = mysqli_query($connection, $sql);
    $out= "";
if ($res) {
    # code...


$out .='<table class="table table-bordered py-3"   style="overflow-x:hidden;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Exam Name</th>
      <th scope="col">Exam Time</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
     
      
      
    </tr>

  </thead>

 ';


    //select exam data from database after the insertion
     $quer = "SELECT * FROM exam";
     $resul = mysqli_query($connection, $quer);


     while ( $arra = mysqli_fetch_array($resul)) {
       
     
    $out .=' <tbody> <tr>
      <td>'.$arra['id'].'</td>
      <td>'.$arra['examcat'].'</td>
      <td>'.$arra['examtime'].'</td>
     
       <td><input type="button" name="View" value="Update" id="'.$arra['id'].'" class = "btn btn-info btn-xs view_data mt-2"></td>

     <td><input type="button" name="View" value="Delete" id="'.$arra['id']. '" class = "btn btn-danger btn-xs view_data mt-2"></td>
     </td>
     

    </tr>
    
    
';
}
$out .= ' </tbody>
</table>';

 echo $out;
  }



  }



  //this code take care of delete


  if (isset($_POST['ex_id'])) {

    $ex_id = $_POST['ex_id'];

     $del = "DELETE FROM exam WHERE id='".$_POST['ex_id']."' ";
     $req = mysqli_query($connection,$del);
     $ou = "";


     if ($req) {





$ou .='<table class="table table-bordered py-3"   style="overflow-x:hidden;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Exam Name</th>
      <th scope="col">Exam Time</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
     
      
      
    </tr>

  </thead>

 ';


    //select exam data from database after the insertion
     $que = "SELECT * FROM exam";
     $resu = mysqli_query($connection, $que);


     while ( $array = mysqli_fetch_array($resu)) {
       
     
    $ou .=' <tbody> <tr>
      <td>'.$array['id'].'</td>
      <td>'.$array['examcat'].'</td>
      <td>'.$array['examtime'].'</td>
     
       <td><input type="button" name="View" value="Update" id="'.$array['id'].'" class = "btn btn-info btn-xs view_data mt-2"></td>

     <td><input type="button" name="View" value="Delete" id="'.$array['id']. '" class = "btn btn-danger btn-xs view_data mt-2 Delete"></td>
     </td>
     

    </tr>
    
    
';
}
$ou .= ' </tbody>
</table>';

 echo $ou;
  }

           }






if (isset($_POST['add_que'])) {
    $select = "SELECT * FROM exam";
    $sel = mysqli_query($connection,$select);
    $output="";
    if ($sel) {
        

        $output .='<table class="table table-bordered py-3"   style="overflow-x:hidden;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Exam Name</th>
      <th scope="col">Exam Time</th>
      <th scope="col">select</th>
     
      
      
    </tr>

  </thead>

 ';


    //select exam data from database after the insertion
     $que = "SELECT * FROM exam";
     $resu = mysqli_query($connection, $que);


     while ( $array1 = mysqli_fetch_array($resu)) {
       
     
    $output .=' <tbody> <tr>
      <td>'.$array1['id'].'</td>
      <td>'.$array1['examcat'].'</td>
      <td>'.$array1['examtime'].'</td>
     
       <td><input type="button" name="View" value="select" id="'.$array1['examcat'].'" class = "btn btn-info btn-xs addQ mt-2"></td>

   
     

    </tr>
    
    
';
}
$output .= ' </tbody>
</table>';

 echo $output;
  }









    }



  










?>