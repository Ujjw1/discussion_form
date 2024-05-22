<?php


$showAlert = false;
$showError = false;
  if($_SERVER["REQUEST_METHOD"] == "POST"){
     include 'dbconnect.php';
     $username = $_POST["username"];
     $password = $_POST["password"];
     $cpassword = $_POST["cpassword"];
      $exists = false;
      $existSql = "SELECT * FROM `users` WHERE username = '$username'";
      
      $result = mysqli_query($conn , $existSql);

      $numExistRows = mysqli_num_rows($result); 

      if($numExistRows > 0){
        $exists = true;
        $showError = "Username Already Exists";
      }
    else{
      $exists = false;
      if($cpassword == $password){
        $hash = password_hash($password , PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` ( `username`, `password`, `data`) VALUES ('$username', '$hash', current_timestamp())";
        $result = mysqli_query($conn , $sql);
        if($result){
          $showAlert = true;
        }
      }
    
     else{
      $showError = "Passwords do not match";
     }
     
  }
}
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
  
   <?php 
     require 'navbar.php' ?>


    <?php
      if($showAlert){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
    if($showError){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '. $showError.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div> ';
      }
      ?>
   
     <div class="container">
       <h1 class="text-center mt-2">Signup To Your WEBSITE</h1>
       <form action="signUp.php" method="post">
  <div class="form-group ">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control"  name="password" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="Confirm Password">Confirm Password</label>
    <input type="password" class="form-control"name="cpassword"   id="cpassword" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary mb-1">SignUp</button>
</form>
     </div>
     <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>