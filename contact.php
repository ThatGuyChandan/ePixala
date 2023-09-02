<?php
$name= $_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["mail"];
$message=$_POST["message"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$sql="INSERT INTO contact1(name,phone,email,message)
VALUES(?,?,?,?)";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"siss",
$name,$phone,$email,$message) ;
mysqli_stmt_execute($stmt);
echo ("your message sent successfully");

/* header("Location: contact.html"); */


?>