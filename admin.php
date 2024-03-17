<!DOCTYPE html>
<html>
<head>
 <title>Product details</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="home.css">




 <style>
    .modal {

            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: ; /* Fallback color */
            background-color: ; /* Black w/ opacity */
            padding-top: 60px;
            padding-left:450px;

    }
    .details, th, td{
  border: 1px solid black;
  border-collapse: collapse;
  font-family:Cambria Math;
  font-size:18px;
  margin-left:5%;
  margin-right:5%;
  padding:3px;
}

product_form{
    border:none;
    font-family: Cambria Math;
}

 </style>
 </head>

 <div class="align" style="background:white;">

<div class="header_align" id="myheader">
  

     <h1 style="font-family:Cambria Math; color:#9966FF;  margin-bottom:20px; margin-top:20px; padding-left:20px; 
padding-right:20px;"> <b>Learning Ladder</b></h1>

      </div>


  

     <div class="search_button" style="margin-top:20px; padding-left:200px; padding:right:50px; width:700px;">
     <form action="courses.php">
      <div class="input-group mb-3"> 
    <input type="text" class="form-control" name="cour"  placeholder="Search for anything" required>
      <button class="btn btn-primary" type="submit" style="background:#6050DC;" color:"white;"><b>Search</b></button> 

     </div>
     </form>
     </div>

 </div>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" style="color:white;"><a href="welcomehome.php">Home</a></li>
    <li class="breadcrumb-item" style="color:white;"><a href="Login_Trail.php">Login</a></li>
    <li class="breadcrumb-item" style="color:white;"><a href="Login_Trail.php">Sign Up</a></li>
  </ol>
</nav>
 <body style="background:">
  <h3 class = "text"><font face="Cambria Math" color="#9966FF" style="background:#9966FF;"><center><b>Welcome to Admin page! 
     </center></font><br></h3> 

  <form action="authentproduct.php" method="post" id="id01" class="modal" enctype="multipart/form-data"  onsubmit="return validation()" >
  <div class="container" style="margin-top:18%; margin-left:18%;
font-family:Cambria Math; font-size:10px;">
    <div class="row">
        <div class="col1">
            <table class="product_form">
                <tr>
                    <td>
                        <b>Product Name</b>
                    </td>
                    <td>
                        <input  name="pname" placeholder=""  type="text"  required ><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Product Category</b>
                    </td>
                    <td>
                        <input type="text" name="pcategory" id="reg" placeholder=""  required><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Product description</b>
                    </td>
                    <td>
                        <input type="text" name="pdescription" id="reg"placeholder="" required><br><br>
                    </td>
                </tr>
                <tr>
                 
                <tr>
                    <td>
                        <b>Product details</b>
                    </td>
                    <td>
                        <input type="text" name="pdetails" id="reg"placeholder="" required><br><br>
                    </td>
                </tr>
                   <td>
                        <b>Product Author name</b>
                    </td>
                    <td>
                        <input type="text" name="pauthorname" id="reg"placeholder="" required><br><br>
                    </td>
                </tr>



                 <tr>
                    <td>
                        <b> Product Published Date</b>
                    </td>
                    <td>
                        <input type="date" name="pdate" ><br><br>
                    </td>
                </tr>

                <tr>
                    <td><b>Add Product video Id</b></td>
                     <td>
                        <input type="text"  name="pvideo" id="pvideo" placeholder="" class="tbb"  required title="" ><br><br>
                    </td>
                </tr>
                
            </table>
        </div>
        <div class="col1">
           <div class="callout" data-closable>
  <button class="close-button" aria-label="Close alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        </div>
    </div>
  </div>
  <div> <b>
    <input type="submit" name="product" value="SUBMIT" id="submit" class="b" style="margin-left:25%; margin-top:3%; background:#6050DC; color:white; margin-bottom:1%;">
    
  </div> </b>
  </form>
  <table style="margin-left:3%;" class="details">

  <button onclick="document.getElementById('id01').style.display='block'" class="login" style="width:auto; background:#6050DC; margin-left:10%; margin-bottom:2%;
margin-top:-5%;
color:white;"><b><center>
ADD Products</center></button></b>
    <tr>
        <th class="size"><center>Slno</center></th>
        <th class="size"><center>Product Name</center></th>
        <th class="size"><center>Product category</center></th>
    </tr>
    <?php
    include("connection.php");
    error_reporting(0);
        $sql = "SELECT * FROM product_details";
        $result = $con-> query($sql);
        if($result -> num_rows >0){
            while($row = $result-> fetch_assoc()) {
                echo "
                <tr>
                <td>". $row['product_id'] . "</td>
                <td>". $row['product_name'] . "</td>
                <td>". $row['product_category'] . "</td>
                <td><a href='delete-product.php?slno=$row[product_id]' onclick='checkdelete()'>DELETE</a></td>
                </tr>
                ";
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn-> close();
        ?>
        </table>
    <script>

        // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
      function checkdelete()
      {
        return confirm('Are you sure you want to delete this data?');
      }
      </script>




  
</body>
 </html>
