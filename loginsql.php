<?php 
session_start();
if(isset($_SESSION['admin'])){

    header("Location:homee.php");
}
include "db_connection.php";

$email = $_POST['email'];  
$pass = $_POST['pass'];  
  
    $sql = "SELECT * from registration where email = '$email' and pass = '$pass'";  
    
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count == 1){  
        $admin= $_SESSION['admin']=$row['email'];
		echo $admin;
        echo "<h1><center> Login successful </center></h1>";
        header("Location:homee.php");
        exit();

}else{
    header("Location: login.php");
    exit();
}    
      
?>