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

$sql = "INSERT INTO appointments VALUES ('".$_POST["pname"]."','".$_POST["specilization"]."','".$_POST["fee"]."','".$_POST["date"]."','".$_POST["docname"]."')";


if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
    swal("Great", "Appointment Booked", "success");
    </script>';
} else {
    echo '<script type="text/javascript">
    swal("Failed", "There Was an", "error");
    </script>' . $sql . "<br>" . $conn->error;
}


$conn->close();
?>


