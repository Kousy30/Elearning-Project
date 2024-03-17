<?php
include('connection.php');

$user_name = $_POST['uname'];
$user_password = $_POST['password'];

$user_name = stripcslashes($user_name);
$user_password = stripcslashes($user_password);

$user_name = mysqli_real_escape_string($con, $user_name);
$user_password = mysqli_real_escape_string($con, $user_password);


$sql = "select * from user_details where user_name = '$user_name' and user_password = '$user_password'";
$result = mysqli_query($con,$sql);




if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
    
    if($row['user_id'] == 1){
        echo "<script>alert('Logged in to admin') </script>";
        ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/elearning/admin.php">
  <?php

    }
    else{
        echo "<script>alert('Logged in to user') </script>";
        ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/elearning/welcomehome.php">
  <?php
    }
}
else{
    echo "<script>alert('Need to register click on SignUp') </script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/elearning/welcomehome.php">
  <?php
}

?>

