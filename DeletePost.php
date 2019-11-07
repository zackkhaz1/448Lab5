<?php
$content = $_POST['delete'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "zack_khaz", "jo9aiyaa", "zack_khaz");
if ($mysqli->connect_errno) {
   printf("Connect failed: %s\n", $mysqli->connect_error);
   exit();
}
foreach($content as $delete)
  {
    $posts = "SELECT post_id FROM posts WHERE content = '$delete'";
    $result = $mysqli->query($posts) or die($mysqli->error);
    while($row = $result->fetch_assoc())
      {
        echo "Post " .$row["post_id"]. " deleted <br>";
        $id = $row["post_id"];
        $posts2 = "DELETE FROM posts WHERE post_id = $id";
        $result2 = $mysqli->query($posts2);
      }

  }
#$posts = "DELETE FROM posts WHERE content = '$content'";
#$result = $mysqli->query($posts) or die($mysqli->error);


 ?>
