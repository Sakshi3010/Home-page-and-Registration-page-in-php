<?php
include "db_connection.php";

$fname=  $_POST['fname'];
$lname= $_POST['lname'];
$pass=  $_POST['pass'];
$edu= $_POST['edu'];
$img = $_POST['img'];
$hobbies = $_POST['hobbies'];
$street = $_POST['street'];
$landmark = $_POST['landmark'];
$zcode = $_POST['zcode'];
$place = $_POST['place'];
$country = $_POST['country'];
$code = $_POST['code'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$uname=  $_POST['uname'];

$sql = "INSERT INTO reg_user (fname, lname, pass,edu, img, hobbies,street, landmark, zcode, place, country, code, phone, email, uname )
VALUES ('$fname', '$lname', '$pass', '$edu', '$img', '$hobbies', '$street', '$landmark', '$zcode', '$place', '$country', '$code', '$phone', '$email', '$uname')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "$fname","$lname","$pass","$edu","$img","$hobbies","$street","$landmark","$zcode","$place","$country","$code","$phone","$email","$uname";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

