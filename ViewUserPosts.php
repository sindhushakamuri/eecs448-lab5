<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "sindhushakamuri", "thai4Yei", "sindhushakamuri");
//checking if connection is failed
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$userID =$_POST["selection"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "gichohu", "milksauce72", "gichohu");
if ($mysqli->connect_error) {
		die("Connection failed: " . $mysqli->connect_error);
		echo"Connection error<br>";
		exit();
}
$query = "SELECT *  FROM Posts WHERE author_id='$author'";
if ($result = $mysqli->query($query)) {
  echo "
          <tr>
            <th>Author</th>
            <th>Posts</th>
          </tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['author_id'] . "</td>";
      echo "<td>" . $row['content'] . "</td>";
      echo "</tr>";
    }
  echo "</table>";
    $result->free();
} else {
   echo "<script> alert('Couldn't get posts.')</script>";
}
$mysqli->close();
?>
