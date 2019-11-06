<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "sindhushakamuri", "thai4Yei", "sindhushakamuri");
//checks connections
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST["username"];
$post = $_POST["content"];
//if it is null
if ($username == "" || $post == "")
{
	echo "You must enter both fields to continue";
}
else
{
     $query = "SELECT * FROM Users WHERE user_id = $username" ;
     // if the username exists
     $result = mysqli_query($mysqli, "SELECT * FROM Users WHERE user_id='$username';");
     if (mysqli_num_rows($result)){
         $post = "INSERT INTO Posts (content,author_id) VALUES ('$message','$username')";
         if ($mysqli->query($post) === TRUE) {
             echo "Post saved!";
         }
         else {
             echo "Post is not created";
         }
     }
     else {
         echo "Post is not created by an existing user";
     }
}
$mysqli->close();
?>
