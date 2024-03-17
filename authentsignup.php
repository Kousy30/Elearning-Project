<?php
require 'connection.php';
	

    if(isset($_POST["submit"]))
    {
        
        
        $user_name =  $_POST['uname'];
        $user_email= $_POST['email'];
        $user_password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        
        $sql = "Select * from user_details where user_name = '$user_name'";
        $result = mysqli_query($con, $sql);
        $count_user = mysqli_num_rows($result);

        $sql1 = "Select * from user_details where user_email = '$user_email'";
        $result1 = mysqli_query($con, $sql1);
        $count_mail = mysqli_num_rows($result1);

        if($count_user ==0 | $count_mail == 0 ){
            if($user_password==$cpassword){
                $hash = password_hash($user_password, PASSWORD_DEFAULT);
                $query = "INSERT INTO user_details VALUES('','$user_name','$user_email','$user_password')";
                $query_run = mysqli_query($con,$query);
            }
            else{
                echo '<script>
                alert("Passwords doest not match");
                window.location.href = "Login_Trail.php";
                </script>';
            }
        }
        else{
            echo '<script>
            alert("User already exists, Try to Login");
            window.location.href = "Login_Trail.php"
            </script>';
        }
        
        
          if($query_run){
            echo "<script>alert('Application form Submitted Successfully') </script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://localhost/elearning/welcomehome.php">
            <?php
            }
            else{
                 echo "<script>alert('Application form Not Submitted') </script>";
                 ?>
                 <META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://localhost/elearning/connection.php">
                 <?php
                 }
	 mysqli_close($con);
 }

?>

