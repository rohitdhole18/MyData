<?php
if(isset($_POST['name'])){
$server = "localhost:3307";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("connection lost ". mysqli_connect_error());
}

$name = $_POST['name'];
$branch = $_POST['branch'];
$phno = $_POST['phone'];
$email = $_POST['email'];


$data = "INSERT INTO `student_data`.`stud_info` (`name`, `branch`, `phno`, `dt`,`email`)
 VALUES ('$name', '$branch', '$phno',current_timestamp(),'$email')";

if ($con->query($data) ==TRUE) {
    echo "<script>alert('Successfully submitted')</script>";
}
else{
    echo "error: $data <br> $con->error";
}

$con->close();
}
// else{
//     echo "fill all the info";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raisoni Group</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script src="script.js"></script>
    <div class="container">
        
        <h1>Student Data</h1>
        <h4>
            Hello! For your confirmation in college, Please fill the given details.
        </h4>


        <form action="main.php" method="post">
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="text" name="branch" id="branch" placeholder="Branch">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="phone" name="phone" id="phone" placeholder="Phone number">

            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>

    </div>
</body>

</html>

