<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id =  $_POST['id_major'];
	  
$sql = "UPDATE major set id_major = '".$_POST['id_major']."', major_name = '".$_POST['major_name']."'";
$sql = $sql. " WHERE id_major='".$id."'";


if ($conn->query($sql) == TRUE) {
  header('Location: major_index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
