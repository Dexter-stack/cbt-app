<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="student.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


  <nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: navy;" >
  <div class="container-fluid ">
    <a class="navbar-brand " href="#">portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item ">
          <a class="nav-link active text-primary " aria-current="page" href="home.php">Home</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registration
          </a>
         <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item " href="undergform.php">Undergraduate</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="stafform.php">Staff</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="pgfor.php">Post graduate</a></li>
          </ul></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a type="button" class="dropdown-item btn " data-bs-toggle="modal" data-bs-target="#studentLog">Undergraduate</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a type="button" class="dropdown-item btn  " data-bs-toggle="modal" data-bs-target="#staffLog" >Staff</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a type="button" class="dropdown-item btn "  data-bs-toggle="modal" data-bs-target="#pgLog">Post graduate</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Event
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item " href="#">Matriculation</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="#">Convocation</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="#">Freshers Orientation</a></li>
          </ul>
        </li>



         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contacts
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item " href="#">Email<i class="fa fa-mail fa-2x"></i></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="#">Call</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="#">Whatsapp</a></li>
          </ul>
        </li>
       
      </ul>


      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Student Login Page -->




 
<!-- pg Logpage -->



 <div class="modal fade " id="pgLog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Post Graduate Login Page</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form mb-5">



      <form class="col-lg-12 col-sm-6 col-m-6 container" method="post" id="insert_form">
              <center><div> <img src="avatar1.png" class="mt-4"></div></center>

        <label class="mt-4">Username</label>
        <input type="text" name="Username" class="form-control" placeholder="Enter Username">
        <label class="mt-4">Password</label>
        <input type="password" name="Password" class="form-control" placeholder="Enter Password"> 
        <input type="submit" name="x" class=" btn btn-primary mt-4">
        <p class="mt-4 container"><strong>forgot password click <a href=""></strong><span class="bg-primary rounded-pill p-3 text-light">here</span></a></p>


      </form>
      

    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">SignUp</button>
      </div>
    </div>
  </div>
</div>
     </div>
    </div>
  </div> 





</body>
</html>