<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
</body>
</html>
<?php
$servername = "localhost";
$username="root";
$password="";
$db = "medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO doctor VALUES ('".$_POST["id"]."','".$_POST["name"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["specialization"]."')";


if ($conn->query($sql) === TRUE) {
    header("location: ../../Front-End/Registration/Admin/dashboard/doctor_list/doc_list.php");
} else {
    echo '<script type="text/javascript">
    swal("Failed", "There Was an", "error");
    </script>' . $sql . "<br>" . $conn->error;
}


$conn->close();
?>


