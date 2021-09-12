
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Management System</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="container">
    <br>
    <a class="btn btn-primary btn-md float-right" href="admin/login.php" >Login</a>
    <br>
    <br>
    <h1 class="text-center">Welcome to Management System</h1>
    <br>
    <div class="row justify-content-center">
      <div class="col-sm-4 col-sm-offset-6">
    
    <form class="table center" action="" method="POST" accept-charset="utf-8">
    
    <table class="table table-bordered table-sm">
        <tr>
          <td colspan="2" class="text-center table-info"><label>Student Information</label></td>
        </tr>
        <tr>
          <td><label for="Choose">Choose Class</label></td>

          <td>
            <select class="form-control" id="choose" name="choose">
              <option value=""> Select</option>
              <option value="1st"> 1st</option>
              <option value="2nd"> 2nd</option>
              <option value="3rd"> 3rd</option>
              <option value="4th"> 4th</option> 
              <option value="5th"> 5th</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="roll">Roll</label></td>
          <td><input class="form-control" type="text" name="roll"pattern="[0-9]{6}" placeholder="roll"></td>
        </tr>
        <tr>
          <td colspan="2" class="text-center"> <input class="btn-btn-default" type="submit" value="Show Info" name="show_info"></td>
        </tr>
    </table>
    </form>
  </div>

</div>
<br>
<br>
<?php
require_once './admin/dbcon.php';
  if (isset($_POST['show_info'])) {

    $choose = $_POST['choose'];
    $roll = $_POST['roll'];

    $result = mysqli_query($link, "SELECT * FROM `student_info` WHERE `class` = '$choose' and  `roll` = '$roll' " );

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);

      ?>
      <div class="row justify-content-center">
      <div class="col-md-6 col-sm-offset-3">
        <table class="table table-bordered">
          <tr>
            <td rowspan="5"> <img class="img-thumbnail" style="width: 200px" src="admin/student_images/<?= $row['photo'];?>" alt=""></td>
            <td>Name</td>
            <td><?= ucwords($row['name']);?></td>
          </tr>

          <tr>
            <td>Roll</td>
            <td><?= $row['roll'];?></td>
          </tr>


          <tr>
            <td>Class</td>
            <td><?= $row['class'];?></td>
          </tr>


          <tr>
            <td>City</td>
            <td><?= ucwords($row['city']);?></td>
          </tr>

        </table>
        
      </div>
  
    </div>
      <?php
    } else {
      ?>
      <script type="text/javascript">
       alert ('Data Not Found'); 
      </script>
     <?php
    }
}

?>

    

  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>