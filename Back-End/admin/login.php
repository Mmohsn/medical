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
// Configuration
$servername = "localhost";
$username="root";
$password="";
$db = "medical";

// Connect To DB
$con = mysqli_connect($servername, $username, $password, $db);  

// Check For connection Errors
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
// If username found in database
if(isset($_POST['username'])){

        // Get username and password
        $username = $_POST['username'];  
        $password = $_POST['password'];  
      
        // SELECT Query
        $sql = "select *from admin where username = '$username' and password = '$password'";  
        // store Query
        $result = mysqli_query($con, $sql);  
        // get rows from DB and store them into Array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // Count DB Rows
        $count = mysqli_num_rows($result);  
        // if found 
        if($count == 1)
        {  
            // Redirect to html page
            header('Location: ../../Front-End/Registration/Admin/dashboard/A_dashboard.html'); 
            exit(); 
        }  
        else
        {  
            // if not found 
            echo '<script type="text/javascript">
            swal("Wrong", "Wrong username or password", "error");
            </script>';
           
            
           
        } 

    }
?>