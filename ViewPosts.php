<?php
$username = $_POST['users'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "zack_khaz", "jo9aiyaa", "zack_khaz");
if ($mysqli->connect_errno) {
   printf("Connect failed: %s\n", $mysqli->connect_error);
   exit();
}
echo "<h2> <center> Posts by " .$username. "</center> </h2>";
$users = "SELECT content FROM posts WHERE author_id = '$username'";
$result = $mysqli->query($users) or die($mysqli->error);
echo "<center>";
echo "<table>";
echo "<tr>";
echo "<th> Posts: </th>";
while($row = $result->fetch_assoc())
  {
    echo "<td>".$row["content"].",</td> ";
  }
 ?>
