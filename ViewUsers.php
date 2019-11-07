<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "zack_khaz", "jo9aiyaa", "zack_khaz");
if ($mysqli->connect_errno) {
   printf("Connect failed: %s\n", $mysqli->connect_error);
   exit();
}

$users = "SELECT * FROM usersLab5";
$result = $mysqli->query($users);
echo "<center>";
echo "<table>";
echo "<tr>";
echo "<th> Users: </th>";
while($row = $result->fetch_assoc())
  {
    echo "<td>".$row["userID"].",</td> ";
  }

 ?>
