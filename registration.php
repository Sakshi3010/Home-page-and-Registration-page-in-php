<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name=  $_POST['first_name'];
$lname= $_POST['last_name'];
$email= $_POST['email'];
$pass=  $_POST['pass'];
//echo $name."<br>".$lname."<br>".$email."<br>".$pass;

$sql = "INSERT INTO registration (first_name, last_name, email, pass)
VALUES ('$name', '$lname', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
