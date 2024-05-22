<?php
    require 'db_connect.php';
    $login = true;
   
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["useremail"];
        $password = $_POST["user_pass"];
        $sql = "SELECT * FROM user WHERE user_email='$username'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        
        if ($num == 1){
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: Welcome.php");
                exit();
            } 
            else{
                $showError = "Invalid Credentials";
            }
        } else {
            $showError = "Invalid Credentials";
        }  
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
    <?php include '_header.php';?>

    <?php
      if($login){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You have successfully logged in.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>';
      }
    
    ?>

    <div class="container">
        <h1 class="text-center mt-4">Login To Your WEBSITE</h1>
        <form method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="useremail" id="useremail" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mb-1">Login</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
