<?php
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";
}else{
    echo "Connection Failed";
}

mysqli_select_db($con, 'photogallary');

$name = $_POST['userName'];
$email = $_POST['userEmail'];
$number = $_POST['userNumber'];



$query = "INSERT INTO users(userName, userEmail, userNumber)VALUES('$name', '$email' , '$number')";

mysqli_query($con,$query);
header('location:index.php')



?>