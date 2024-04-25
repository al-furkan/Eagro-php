<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Navbar Component -->
  <div class="topbarContainer">
    <!-- Navbar content -->
    <?php
      include('./navebar.php');
      ?>
  </div>
  
  <!-- Main Profile Section -->
  <div class="profile">
    <!-- Sidebar Component -->
    <div class="sidebar">
      <!-- Sidebar content -->
      <?php
      include("./leftbar.php")
      ?>
    </div>
    
    <!-- Profile Content -->
    <div class="profileRight">
      <!-- Profile Top Section -->
      <div class="profileRightTop">
        <!-- Profile Cover -->
        <div class="profileCover">
          <img class="profileCoverImg" src="assets/img/p1.jpeg" alt="">
          <img class="profileUserImg" src="assets/img/p2.jpeg" alt="">
        </div>
        <!-- Profile Information -->
        <div class="profileInfo">
          <h4 class="profileInfoName">Safak Kocaoglu</h4>
          <span class="profileInfoDesc">Hello Traders!</span>
        </div>
      </div>
      
      <!-- Profile Bottom Section (Feed and Rightbar) -->
      <div class="profileRightBottom">
        <!-- Feed Component -->
        <div class="feed">
          <!-- Feed content -->
          <?php
             include("./feed.php");
           ?>
        </div>
        <!-- Rightbar Component -->
        <div class="rightbar">
          <!-- Rightbar content -->
          <?php
             include("./rightbar.php");
           ?>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
