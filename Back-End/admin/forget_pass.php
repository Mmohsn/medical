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
// =========================================== Configurations =======================================
$servername = "localhost";
$username="root";
$password="";
$db = "medical";
// =========================================== Database Connection =======================================
$con = mysqli_connect($servername, $username, $password, $db);  
// Check For connection Errors
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
// =========================================== Backend Part =======================================
// If email found in database
if(isset($_POST['email'])){

        // Get email, password value
        $email = $_POST['email'];  
        $pass = $_POST['pass'];  
        $conf_pass = $_POST['conf_pass'];
        // if email is null print error message
        if($email == "")
        { 
            echo '<script type="text/javascript">
            swal("Wrong", "Enter Email", "error");
            </script>';
        }
        // if email is correct 
        else{
        // SELECT Query to select email from databas
        $sql = "select *from admin where email = '$email'";  
        // store Query
        $result = mysqli_query($con, $sql);  
        // get rows from DB and store them into Array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // Count DB Rows
        $count1 = mysqli_num_rows($result);  
        // if found in database
        if($count1 == 1)
        {  
            // and if password == confirm password
            if($pass == $conf_pass)
            {
                 // then update password
                $sql1 = "Update admin set password = '$pass' where email = '$email'";  
                // store Query
                $result1 = mysqli_query($con, $sql1); 
                // if password updated successfully print message 
                if($result1)
                {
                echo '<script type="text/javascript">swal("Great", "Password Changed Successfully", "success");</script>';
                }    
        } 
        // if password not match
        else{echo '<script type="text/javascript">swal("Wrong", "Password not match", "error");</script>';}                                        

            
        }  
    else
        {  
            // if not found in database
            echo '<script type="text/javascript">
            swal("Wrong", "Email not found", "error");
            </script>';
           
            
           
        } 
            }
    }
?>