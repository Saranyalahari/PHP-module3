<?php
$servername = "localhost";
$username = "Saranya";
$password = "";
$dbname = "Saranya";
// create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// check connection
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
echo"connected successfully";
$conn->close();
?>