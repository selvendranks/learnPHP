<?php
 //connection to the database
 $servername = 'localhost';
 $username = 'root';
 $password = "";

 //create a connection
 $conn = mysqli_connect($servername,$username,$password);
 
 //die if connection was not established
 if(!$conn){
    die("sorry we could not establish connection".mysqli_connect_error());
 }
 else{
    echo "connection success";
 }
//create a database
$sql = "CREATE DATABASE Drag1";
mysqli_query($conn,$sql);

?>