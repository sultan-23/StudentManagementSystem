<?php
require_once'./dbcon.php';
session_start();

  if (isset($_SESSION['user_login'])) {
    header('location: index.php');
  }

  if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];


    $username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username`= '$username'");
      if(mysqli_num_rows($username_check) > 0){
        $row = mysqli_fetch_assoc($username_check);

        if($row['password'] == md5($password)){
          if($row['status'] == 'active'){
            $_SESSION['user_login'] = $username;
            header('location: index.php');
          } else{
            $status_inactive = "Your Status Inactive.";
          }

        } else {
          $wrong_password = "This Password Is Wrong.";
        }
      } else{
        $username_not_found = "Invalid Username.";
      }




    }


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">

    <title>Student Management System</title>
  </head>
  <body>
    <div class="container animate__animated animate__zoomIn">
      <h1 class="text-center">Students Management System</h1>
      <br>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <h2 class="text-center">Admin Login Form</h2>
          <form action="login.php" method="POST">
            <div>
              <input required="" type="text" placeholder="Username"  name="username" class="form-control" value="<?php if(isset($username)){echo $username;}?>" >
            </div>
            <div>
              <input required="" type="password" placeholder="Password"  name="password" class="form-control" value="<?php if(isset($password)){echo $password;}?>" >
            </div>
            <br>
            <div>
              <input type="submit" value="login" name="login" class="btn btn-info pull-right">
            </div>
            
          </form>
          
        </div>
        
      </div>
      <br>
      <?php if(isset($username_not_found)){
        echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$username_not_found.'</div>';}?>
        <?php if(isset($wrong_password)){
        echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$wrong_password.'</div>';}?>
        <?php if(isset($status_inactive)){
        echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$status_inactive.'</div>';}?>
    </div>

  </body>
</html>