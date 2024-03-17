<!DOCTYPE html>
<html lang="en">
<head>
   <title>Login and Sign UP page</title>
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
  .nav-item{
      background-color:;
      display:flex;
      margin-left:40%;
      margin-top:2%;
        font-family: Cambria Math;
  }
  .page{
       background-color:;
       font-color:white;
  }
  body{
      background:white;
  }
  

  </style>
</head>
<body class="bg-dark h-100" style="background:blue;">
 <div class="page">
   <li class="nav-item dropdown">
    <a class="nav-link w3-button w3-black "  data-toggle="modal" data-target="#staticBackdrop1" href="#" role="button" aria-haspopup="true" onclick="document.getElementById('id01').style.display='block'" aria-expanded="false" style="background:white; font-color:white;"><b>LOGIN</b></a>
    <a class="nav-link w3-button w3-black "  data-toggle="modal" data-target="#staticBackdrop2" href="#" role="button" aria-haspopup="true" onclick="document.getElementById('id02').style.display='block'" aria-expanded="false"style="background:white; font-color:white; margin-left:2%;"><b> SIGN UP</b></a>
   
    <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel" style="color:#3E8EDE;"><b>
            Login</h5></b>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" title="Close Popup">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
        <form class="modal-content animate" action="authentlogin.php" method="post">
            
            <div class="container" style="margin:3%;">
                <label for="uname"><b><font face="Cambria Math" style="font-size:17px;">Enter Username</b></label>
                <input type="text" placeholder="" name="uname" required style="margin:3%;"><br>
                <label for="psw"><b>Enter Password</b></label>
                <input type="password" placeholder="" name="password" required  style="margin:4%;">
               
                
                <div class="modal-footer">
            <button type="submit" name="login" value ="login" style="background:#3E8EDE;" font-color:"white;"><b>
            <font face="Cambria Math">Login</button></b>
                
                 
          </div>

            </div>
            
        </form>
    </div>
      

          
        </div>
      </div>
    </div>

    <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel" style="color:#3E8EDE;"><b>
            Sign UP</h5></b>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" title="Close Popup">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
        <form class="modal-content" onSubmit="return validatePassword()" action="authentsignup.php" method ="post">
    <div class="container">
      <h3 style="margin-top:3%;">Please fill the details</h3>
      
      <hr>
      <label for="text"><b>Enter Username</b></label>
      <input type="text" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" placeholder="" name="uname" autocomplete="off" required  style="margin-left:7%;">
      <br>
      <label for="email"><b>Enter Email ID</b></label>                        
      <input type="email" placeholder="" name="email" required style="margin-left:10%;">
      <span id="mail" class="text"></span>
      <br>
      <label for="password"><b>Enter Password</b></label>
      <input type="password" placeholder="" name="password" required style="margin-left:9%;">
      <br>
      <label for="cpassword"><b>Retype Password</b></label>
      <input type="password" placeholder="" name="cpassword" required style="margin-left:7%;">
      <br>
      <div class="clearfix"  style="margin-top:5%; margin-bottom:5%;"><center>
        <button type="submit"name="submit"  class="signupbtn" style="background:#3E8EDE;"><b>
        Sign Up</button></b></center>
      </div>
    </div>
  </form>
    </div>
      

          
        </div>
      </div>
    </div>

  </li>



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
      

</div>
</body>

</html>