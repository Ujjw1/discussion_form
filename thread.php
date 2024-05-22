<?php
require 'db_connect.php';

// Get the thread ID from the URL
$thread_id = $_GET['threadid'];

// Fetch thread details
$sql = "SELECT * FROM `threads` WHERE `thread_id` = $thread_id"; 
$result = mysqli_query($conn, $sql);

// Check if the query was successful and if it returned any results
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $thread_title = $row['thread_title'];
    $thread_desc = $row['thread_desc'];
    $thread_user_id = $row['thread_user_id'];
    $timestamp = $row['timestamp'];

    // Fetch the user who posted the thread
    $sql2 = "SELECT `user_email` FROM `user` WHERE `user_id` = '$thread_user_id'";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2 && mysqli_num_rows($result2) > 0) {
        $row2 = mysqli_fetch_assoc($result2);
        $user_email = $row2['user_email'];
    } else {
        $user_email = "Anonymous";
    }
} else {
    die("Thread not found.");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Thread Details</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo htmlspecialchars($thread_title); ?></h1>
            <p class="lead"><?php echo htmlspecialchars($thread_desc); ?></p>
            <hr class="my-4">
            <p>Posted by: <?php echo htmlspecialchars($user_email); ?> on <?php echo htmlspecialchars($timestamp); ?></p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZF5Joft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
