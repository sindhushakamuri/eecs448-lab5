<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "sindhushakamuri", "thai4Yei", "sindhushakamuri");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "<h1>List of Users</h1>";
$query = "SELECT * FROM Users";

if($result = $mysqli->query($query))
{
  //this sets up the table
  echo "<table border='1'>
        <tr> </tr>";
        while ($row = $result->fetch_assoc())
        {
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";
}
$mysqli->close();
$result->free();
?>
