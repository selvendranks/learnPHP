<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="deleteTable.php" method="POST">

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sno</label>
                <input type="number" class="form-control" name="sno" id="exampleInputPassword1">
            </div>
       

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sno = $_POST['sno'];

    //connect to database
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dataBase = 'drag';

    //create a connection
    $conn = mysqli_connect($server, $username, $password, $dataBase);

    //die if connection was not established
    if (!$conn) {
        die("sorry we could not establish connection" . mysqli_connect_error());
    } else {
        echo "connection success";
    }

    //delete row from  table
    $sql = "DELETE FROM `students` WHERE `sno`=$sno";
    $result = mysqli_query($conn, $sql);

    //numbers of rows thats been affected
    $aff  = mysqli_affected_rows($conn);
    echo("affected rows is :".$aff);

    if ($result) {
        echo '<script>alert("Value succesfully added to database")</script>';
    } else {
        echo ("<script>alert(" . mysqli_error($conn) . ")</script>");
    }
}
?>

</html>