<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "sindhushakamuri", "thai4Yei", "sindhushakamuri");
//checks connections
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST["username"];
$sql = "INSERT INTO Users (user_id) VALUES (\"$username\");";
//if it is empty
if($username == "")
{
	echo "You must enter a username";
}
else {
      if ($mysqli->query($sql) === TRUE)
      {
          echo "User Added Successfully";
      }
      else
      {
          echo "The user already exists";
      }
}

$mysqli->close();
?>
