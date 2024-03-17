<?php
include("connection.php");
$product_id = $_GET['slno'];

$query = "DELETE FROM product_details where product_id ='$product_id'";
$data=mysqli_query($con,$query);

if($data)
{
  echo "<script>alert('Record Deleted') </script>"
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/elearning/admin.php">
  <?php
}
else {
  echo "<script>alert('Record is not Deleted') </script>"
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/elearning/admin.php">
  <?php
}

 ?>
