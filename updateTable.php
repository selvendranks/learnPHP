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
        <form action="updateTable.php" method="POST">

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sno</label>
                <input type="number" class="form-control" name="sno" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="name" class="form-control" name="name" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">date of Birth</label>
                <input type="date" class="form-control" name="DOB" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Department</label>
                <input type="text" class="form-control" name="dept" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sno = $_POST['sno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $DOB = $_POST['DOB'];
    $dept = $_POST['dept'];

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

    //update table
    $sql = "UPDATE `students` SET `name`=$name , `email`=$email , `DOB`=$DOB , `dept`=$dept WHERE `sno`=$sno";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Value succesfully added to database")</script>';
    } else {
        echo ("<script>alert(" . mysqli_error($conn) . ")</script>");
    }
}
?>

</html>