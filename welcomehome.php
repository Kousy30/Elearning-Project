<html>
<head>
 <title>Welcome Home</title>
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
   .modal {

            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 200%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            
            padding-top: 60px;
            padding-left:450px;
    }

    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
    text-align: center;
  background-color:#CCCCFF ;
  margin-left: 85%;
  
box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;

      width: 100%;
     
     padding: 0 10px;
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


<!-- Content -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top:2%;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.techslang.com/wp-content/uploads/2023/09/learn-programming-language-scaled-e1695915051727-2048x1071.jpg" class="d-block w-100"
                alt="First Image" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Learning Ladder</h5>
                    <p>Let's Get ready, to climb the ladder of knowledge! </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://visme.co/blog/wp-content/uploads/2021/08/Data-Visualization-Header.jpg" class="d-block w-100"
                    alt="First Image" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Learning Ladder</h5>
                    <p>Let's Get ready, to climb the ladder of knowledge! </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://sf16-va.tiktokcdn.com/obj/eden-va2/nb-shivsn-ryhs/ljhwZthlaukjlkulzlp/lark-topics/ai-glossary/reinforcement-learning-theory.webp" class="d-block w-100"
                    alt="First Image" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Learning Ladder</h5>
                    <p>Let's Get ready, to climb the ladder of knowledge! </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>





<div class="category_text"> 
     <br> 
     <h3 class = "text"><font face="Cambria Math" color="#9966FF" style="background:#9966FF;"><center><b>What to learn next? 
     </center></font><br></h3> 
      </div>



   <!--top categories-->
  
  <?php

    include("connection.php");

    error_reporting(0);
   
   
    $sql = "SELECT DISTINCT(product_category)   FROM product_details";
     $result = $con-> query($sql);
   if($result -> num_rows >0){
         while($row = $result-> fetch_assoc()) {
         

echo'<div class="row">';
  echo'<div class="column">';
    ?>
 <div class="card mb-3" style="max-width: 540px;">
   <div class="row no-gutterss">
     <div class="col-md-4">
       <img src="https://img.freepik.com/free-vector/e-learning-education-template-vector-technology-ad-banner_53876-125996.jpg?w=1380&t=st=1708854606~exp=1708855206~hmac=f881ca988f8bc0ccd56838793123ccefd7257502dffd6fbc17b82901a4997438" class="card-img" alt="">
     </div>
     <div class="col-md-8">
    <div class="card-body">
    <h5 class="card-title"><b> <?php echo $row['product_category']; ?> </b> </h5>
   
 
    <?php
     echo " <a href='Topcategories.php?catu=$row[product_category]' > VIEW</a> ";
     ?>
 
 
 
   
             </div>
     </div>
   </div>
  </div>
  <?php
  echo "</div>";
  echo "</div>";
 }
}
?>


<script type="text/javascript" src="log.js">
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal
var modal = document.getElementById('id02');



</script>
      



  <script type="text/javascript" src="log.js">
// Get the modal
var modal = document.getElementByName('cour');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal
//var modal = document.getElementById('id02');

</script>



</body>
</html>