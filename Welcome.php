

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  </head>
  <body>
  
  <?php include '_header.php';?>
     <?php include 'db_connect.php' ?>
   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="\partial/slider-1.jpeg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
            <img src="\partial/slider-2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="\partial/slider-3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container my-3">
      <h2 class="text-center mb-2">Engaging discussions on programming languages like Python, Java, JavaScript, C++, and <a href="logout.php">Logout!</a></h2>
     <div class="row">
        <?php
           $sql = "SELECT * FROM `category`";
           $result = mysqli_query($conn , $sql);
           while($row = mysqli_fetch_assoc($result)){
            $cat  = $row['category_name'];
            $des  = $row['category_description'];
            $id = $row['category_id'];
          echo '<div class="col-md-4 my-2">
            <div class="card" style="width: 18rem;">
        <img src= "https://source.unsplash.com/500x400/?'.$cat.'" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="Threads.php?catid='.$id.'">'.$cat.'</a></h5>
          <p class="card-text"><a href="Threads.php?catid='.$id.'">'.$des.'</a></p>
          <a href="Threads.php" class="btn btn-primary">View Threads</a>
        </div>
      </div>
      </div>';
           }
        ?>
      </div>
     </div>


    </div>
  
     <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>