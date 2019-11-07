<?php
session_start();
$author = $_SESSION['username'];
$userPost = $_POST['userPost'];
echo "Author: " .$author."<br>";
echo "Your post: ".$userPost. "<br>";
if(empty($userPost))
  {
    echo "Post cannot be empty, not saved";
    header('Location: CreatePosts.html');
  }
else {
  $mysqli = new mysqli("mysql.eecs.ku.edu", "zack_khaz", "jo9aiyaa", "zack_khaz");
  if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli->connect_error);
     exit();
 }
 $query = "INSERT INTO posts (content,author_id) VALUES ('".$userPost."','".$author."')";
 if($mysqli->query($query) == TRUE)
   {
     echo "Post inserted to database";
   }
   else {
     echo "Error: " . $query . "<br>" . $mysqli->error;
   }
}


 ?>
