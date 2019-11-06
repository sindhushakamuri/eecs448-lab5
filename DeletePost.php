<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "sindhushakamuri", "thai4Yei", "sindhushakamuri");

// check connection
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$posts = $_POST["checkbox"];
//checks each one
foreach($posts as $value)
{
	$delete = "DELETE FROM Posts WHERE post_id = '$value'";
	if($mysqli->query($delete) == TRUE)
	{
		echo "Post id: " .$value. " deleted. <br>";
	}
	else
	{
		echo "Error all are already deleted "
	}
}
$mysqli->close();
?>
