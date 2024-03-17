<!DOCTYPE html>
<html>
<head>
	<title>Product Insert Form</title>
</head>
<body>

<?php
require 'connection.php';
	

    if(isset($_POST["product"]))
    {
        
        
        $product_name =  $_POST['pname'];
        $product_category= $_POST['pcategory'];
        $product_description= $_POST['pdescription'];

        $product_details = $_POST['pdetails'];
        $product_authorname = $_POST['pauthorname'];
        $product_publisheddate = $_POST['pdate'];

        
        $product_videoid= $_POST['pvideo'];
        
        $query = "INSERT INTO product_details VALUES ('','$product_name','$product_category','$product_description','$product_details','$product_authorname','$product_publisheddate','$product_videoid')";
        $query_run = mysqli_query($con,$query);
	 // header('Location: new.php');
	
if($query_run){
    echo "<script>alert('Product details Submitted Successfully') </script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://localhost/elearning/admin.php">
    <?php
}else{
    echo "<script>alert('Product details Not Submitted') </script>";
   
    }
	 mysqli_close($con);


 }
?>

</body>
</html>

	
