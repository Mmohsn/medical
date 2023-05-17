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

$sql = "INSERT INTO patient VALUES ('".$_POST["fullname"]."',
                                    '".$_POST["pid"]."',
                                    '".$_POST["address"]."',
                                    '".$_POST["phone"]."',
                                    '".$_POST["city"]."',
                                    '".$_POST["email"]."',
                                    '".$_POST["username"]."',
                                    '".$_POST["password"]."')";


if ($conn->query($sql) === TRUE) {
    header("location: ../../Front-End/Registration/Admin/dashboard/patients_list/plist.php");
} else {
    echo '<script type="text/javascript">
    swal("Failed", "There Was an error", "error");
    </script>' . $sql . "<br>" . $conn->error;
}


$conn->close();
?>


