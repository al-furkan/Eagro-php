<?php
session_start();
include("./db.php"); // Added a semicolon here

// Handling login form submission
if(isset($_POST['btn'])){ 
    // Get input values from the form
    $email = $_POST['email'];
    $pass =$_POST['password'];
    
    $sel_user ="select * from user where email='$email' AND password='$pass'";
    $run_user=mysqli_query($con,$sel_user);

    $check_user = mysqli_num_rows($run_user);

    if($check_user==0){
    echo " <script>alert('password or email is worng, please try again')</script>";
    }
    else{
        $_SESSION['email']=$email;
        echo "<script>window.open('index.php?logged_in=you have successfuly login','_self')</script>";
    }
   
}
$con->close();
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
  <title>Document</title>
</head>
<body>
  <div class="login">
    <div class="loginWrapper">
      <div class="loginLeft">
        <h3 class="loginLogo">E-AgRo</h3>
        <span class="loginDesc">
          Connect with friends and the world around you on Lamasocial.
        </span>
      </div>
      <div class="loginRight">
      <form action="login.php" method="post" enctype="multipart/form-data">
      <div class="loginBox1">
         <input type="text" name="email" placeholder="Email" class="loginInput" />
         <input type="password" name="password" placeholder="Password" class="loginInput" />
         <button type="submit" name="btn" class="loginButton">Log In</button>
          <span class="loginForgot">Forgot Password?</span>
         <button class="loginRegisterButton">
        <a href="./register.php" style="text-decoration: none; color:white;">Create a New Account</a>
         </button>
  </div>
</form>
      </div>
    </div>
  </div>
  
</body>
</html>