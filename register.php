<?php
 // Include your database connection script
session_start();
include("./db.php");
// Check if the form is submitted
if(isset($_POST['btnr'])){ 
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_again = $_POST['password_again'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Validate input
    if(empty($username) || empty($email) || empty($password) || empty($password_again) || empty($address) || empty($phone)) {
        echo " <script>alert('All fields are required.')</script>";
        exit();
    }

    if($password !== $password_again) {
        echo " <script>alert('Passwords do not match.')</script>";
        exit();
    }
    $check_email_query = "SELECT * FROM user WHERE email='$email'";
    $check_email_result = $con->query($check_email_query);

    if ($check_email_result->num_rows > 0) {

        echo " <script>alert('Email address is already registered.')</script>";
        exit();
    }
    // // Hash the password for security
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $sql = "INSERT INTO user (username, email, password, address, phone) VALUES ('$username', '$email', '$password', '$address', '$phone')";

    if ($con->query($sql) === TRUE) {
      $_SESSION['email']=$email;
      echo "<script>window.open('index.php?logged_in=you have successfuly login','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $con->close();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/register.css">
  <title>Registration</title>
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
      <form action="register.php" method="post" enctype="multipart/form-data">
        <div class="loginBox">
         
            <input type="text" name="username" placeholder="Username" class="loginInput" />
            <input type="email" name="email" placeholder="Email" class="loginInput" />
            <input type="password" name="password" placeholder="Password" class="loginInput" />
            <input type="password" name="password_again" placeholder="Password Again" class="loginInput" />
            <input type="text" name="address" placeholder="Address" class="loginInput" />
            <input type="text" name="phone" placeholder="Phone" class="loginInput" />
            <button type="submit" name="btnr" class="loginButton">Sign Up</button>
         
            <button class="loginRegisterButton">
           <a href="./register.php" style="text-decoration: none; color:white;">Login  Account</a>
         </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
