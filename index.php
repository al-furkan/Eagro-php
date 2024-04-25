<?php
session_start();
include("./db.php");

if(!isset($_SESSION['email'])){
  echo "<script>window.open('login.php?not_admin=you have not admin','_self')</script>";
}
else{


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-AgRo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Navbar component -->
  <nav>
    <?php
       include("./navebar.php");
    ?>
  </nav>

  <!-- Home container -->
  <div class="homeContainer">
    <!-- Sidebar component -->
   
      <!-- Content of Sidebar -->
      <?php
       include("./leftbar.php");
       ?>
    

    <!-- Feed component -->
   
      <!-- Content of Feed -->
      <?php
       include("./feed.php");
       ?>

    <!-- Rightbar component -->
    
      <!-- Content of Rightbar -->
      <?php
       include("./rightbar.php");
       ?>
  </div>

  <!-- Add your JavaScript links here -->

</body>

</html>
<?php
}
?>