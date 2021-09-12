<?php

session_start();

  require_once './dbcon.php';
  	
	if(!isset($_SESSION['user_login'])){
		header('location: login.php');
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <title>SMS</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <script type="text/javascript" src="../js/jquery-3.5.1.js" ></script>
  <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../js/dataTables.bootstrap4.min.js" ></script>
  <script type="text/javascript" src="../js/script.js" ></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="index.php">SMS</a>
  </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="logout.php"> <i class="fas fa-user"></i> Welcome: Sultan</a></li>
        <li><a  href="registration.php"> <i class="fas fa-user-plus"></i> Add User</a></li>
        <li><a  href="index.php?page=user-profile"> <i class="fas fa-user"></i> Profile</a></li>
          <li><a  href="logout.php"> <i class="fas fa-power-off"></i> Logout</a></li>
          

      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="list-group">
              <a href="index.php?page=dashboard" class="list-group-item list-group-item-action active"><i class="fas fa-tasks"></i>
                Dashboard
                </a>
                <a href="index.php?page=add-student" class="list-group-item list-group-item-action"><i class="fas fa-user-plus"></i>  Add Student</a>
                <a href="index.php?page=all-student" class="list-group-item list-group-item-action"><i class="fas fa-users"></i>   All Student</a>
                <a href="index.php?page=all-users" class="list-group-item list-group-item-action"><i class="fas fa-user-friends"></i>  All Users</a>
                
            </div>
          
        </div>
        <div class="col-sm-9">
            <div class="content">


                <?php

                if(isset($_GET['page'])){

                  $page = $_GET['page'].'.php';

                } else{

                  $page = "dashboard.php";
                }


                if(file_exists($page)){

                require_once $page;
                
              } else{

                require_once '404.php';

              }
 

                ?>


            </div>
          
        </div>
      </div>
    </div>
    <footer class="footer-area">
      <p>Copyright &COPY; 2020 Students Managements System. All Right Reserved</p>
    </footer>
</body>
</html>