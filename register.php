<html>
<head>
	<title>Product form</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
} 


    </style>
</head>

<body>
    <button onclick="document.getElementById('id01').style.display='block'" class="login" style="width:auto;">Login</button>
    <button onclick="document.getElementById('id02').style.display='block'" class="login" style="width:auto;">Sign Up</button>
 
  
	<div id="id01" class="modal">
        <form class="modal-content animate" action="authentlogin.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <button type="submit" name="login" value ="login">Login</button>
                
            </div>
            <div class="container" >
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                
            </div>
        </form>
    </div>




    <div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" onSubmit="return validatePassword()" action="authentsignup.php" method ="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>]
      <label for="text"><b>Username</b></label>
      <input type="text" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" placeholder="Username" name="uname" autocomplete="off" required>

      <label for="email"><b>Email</b></label>                        
      <input type="email" placeholder="Enter Email" name="email" required>
      <span id="mail" class="text"></span>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="cpassword"><b>Retype Password</b></label>
      <input type="password" placeholder="Re-type Password" name="cpassword" required>
      
      <div class="clearfix">
        <button type="submit"name="submit"  class="signupbtn">Sign Up</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </div>
  </form>
</div>

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
</body>
</html>
