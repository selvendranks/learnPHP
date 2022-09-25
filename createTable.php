<?php
 //connection to the database
 $servername = 'localhost';
 $username = 'root';
 $password = "";
 $database = "drag";

 //create a connection
 $conn = mysqli_connect($servername,$username,$password,$database);
 
 //die if connection was not established
 if(!$conn){
    die("sorry we could not establish connection".mysqli_connect_error());
 }
 else{
    echo "connection success";
 }
//create a table
$sql = "CREATE TABLE `emplyees` (`sno` INT NOT NULL , `name` VARCHAR(20) NOT NULL , `role` VARCHAR(11) NOT NULL , `doj` DATETIME NOT NULL , PRIMARY KEY (`sno`))";


mysqli_query($conn,$sql);

?>