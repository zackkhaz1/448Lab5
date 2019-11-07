<?php
session_start();
$username = $_POST['username'];

 $mysqli = new mysqli("mysql.eecs.ku.edu", "zack_khaz", "jo9aiyaa", "zack_khaz");
 if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$_SESSION['username'] = $username;
$user = mysqli_query($mysqli, "SELECT * FROM usersLab5 WHERE userID = '$username'");
$row = mysqli_fetch_array($user);
    $query = "INSERT INTO usersLab5 (userID) VALUES ('$username')";
    if($mysqli->query($query) == TRUE)
      {
        echo "User inserted to database";
        header('Location: CreatePosts.html');
      }
    else {
      echo "Error: " . $query . "<br>" . $mysqli->error;
      echo "<p> User already exists, record not inserted </p>";

    }

 ?>
