<html>
<head>
 <title>Courses</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="home.css">
  
<style>
.card {
    border:none;
    text-align: center;
  
  margin-left: 65%;
  margin-top:-3%;
      width: 100%;
     float: left;
      font-family: Cambria Math;
   color:#00356B;
  
  }
</style>
</head>

<body>
<!--header-->
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

<div class="category_text"> 
     <br> 
     <h3 class = "text"><font face="Cambria Math" color="#9966FF" style="background:#9966FF;"><center><b>Check out below the complete course details
     </center></font><br></h3> 
      </div>


<?php
    include("connection.php");
    error_reporting(0);
    
    $topcour = $_GET['cour'];
    
    $sql = "SELECT *   FROM product_details where product_name='$topcour' ";
     $result = $con-> query($sql);
   if($result -> num_rows >0){
         while($row = $result-> fetch_assoc()) {
         
 
echo'<div class="row">';
  echo'<div class="column">';
    ?>
 <div class="card mb-3" style="max-width: 700px; font-family:Cambria Math; color:#002147;">
   <div class="row no-gutters">
    
     <div class="col-md-8">
    <div class="card-body">
    
    <h5 class="card-title"><b> Course name <br>
    <?php echo $row['product_name']; ?> </b> </h5>
    <h5 class="card-title"><b> Course description <br>
    <?php echo $row['product_description']; ?> </b> </h5> <br>
    <h5 class="card-title"><b> Course details <br>
    <?php echo $row['product_details']; ?> </b> </h5> <br>
    <h5 class="card-title"><b> Course Authorname <br>
    <?php echo $row['product_authorname']; ?> </b> </h5>
    <h5 class="card-title"><b> Course Published date <br>
    <?php echo $row['product_publisheddate']; ?> </b> </h5>
   
    


    <?php
     //echo " <a href='courses.php?cour=$row[product_name]' >VIEW</a> ";
     ?>
 
 
 
   
             </div>
     </div>
   </div>
  </div>
  
  <?php
  echo "</div>";
  echo "</div>";
  ?>

  <div class="video" style="margin-left:20%; margin-bottom:2%;">
  <?php 
  //echo $row['product_videoid'];
  $url= 'https://www.youtube.com/watch?v='.$row['product_videoid'];
  //echo '<a href=" '.$url.' ">'.$url.'</a>';
  echo '<br><br>';
  
    echo  '<iframe width="770" height="315" src="https://www.youtube.com/embed/'.$row['product_videoid'].'" title="YouTube video player" frameborder="0" 
  allow="accelerometer; autoplay; 
clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
    

?>
</div>



<?php
 }
}
else{

    echo "No courses available, Please checkout the Top categories for available courses";
}
?>



</body>
</html>