<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>

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
?>
</html>