<!-- ========================================= javascript sweet alerts ================================= -->
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
$username = "root";
$password = "";
$dbname = "medical";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['update'])){

    $sql = "UPDATE patient SET fullname='$_POST[name]' , phone='$_POST[phone]' , email='$_POST[email]' ,  city='$_POST[city]',username = '$_POST[username]' where pid = '$_POST[pid]'";

    if ($conn->query($sql) === TRUE)
    {
               echo '<script type="text/javascript">
        swal("Great", "Profile Data Updated", "success");
        </script>';
    

       
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

}
?>