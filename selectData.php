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
    echo "connection success<br>";
 }


  //select data from table
  $sql = "SELECT * FROM students";
  $result = mysqli_query($conn,$sql);

  if($result){
     
      //find the number of records returned
      $num = mysqli_num_rows($result);
      echo $num;

      //display the rows returned by the sql query
    //   if($num>0){
    //       $row = mysqli_fetch_assoc($result);  //fetch first row
    //       echo var_dump($row);
    //   }


    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo ("<br>Sno : ".$row['sno']);
        echo("<br>name is:".$row['name']);
        echo("<br>email is : ".$row['email']);
        echo("<br>date of birth is : ".$row['DOB']);
        echo("<br>department : ".$row['dept']);
    }
  }
  else{
      echo("<script>alert(".mysqli_error($conn).")</script>");
  }
 ?>