<?php
include("./db.php"); // Include your database connection script

// Check if the form is submitted
if(isset($_POST['btns'])){
    // Retrieve form data
    $content = $_POST['content'];
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    // Move uploaded file to a desired directory
    move_uploaded_file($file_tmp,"uploads/".$file_name);

    // Insert shared content into database
    $sql = "INSERT INTO  post (content, img) VALUES ('$content', '$file_name')";

    if ($con->query($sql) === TRUE) {
        echo " <script>alert('Post shared successfully.')</script>";
        echo "<script>window.open('index.php?insart_msg','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close connection
    $con->close();
}
?>

<div class="share">
  <div class="shareWrapper">
    <form action="share.php" method="post" enctype="multipart/form-data">
    <div class="shareTop">
      <img class="shareProfileImg" src="./assets/img/male-avatar-profile-picture-vector-10211761.jpg" alt="">
      <input placeholder="What's in your mind Safak?" class="shareInput" name="content" required>
    </div>
    <hr class="shareHr">
    <div class="shareBottom">
      <div class="shareOptions">
        <div class="shareOption">
        <i class="fab fa-font-awesome-flag shareIcon" style="color: tomato;"></i>
        <label for="file-upload" class="custom-file-upload">
        Photo or Video
       </label>
       <input class="shareinput" id="file-upload" type="file" name="file" required />

        </div>
        <div class="shareOption">
          <i class="fas fa-tag shareIcon" style="color: blue;"></i>
          <span class="shareOptionText">Tag</span>
        </div>
        <div class="shareOption">
          <i class="fas fa-map-marker-alt shareIcon" style="color: green;"></i>
          <span class="shareOptionText">Location</span>
        </div>
        <div class="shareOption">
          <i class="far fa-smile shareIcon" style="color: goldenrod;"></i>
          <span class="shareOptionText">Feelings</span>
        </div>
      </div>
      <button class="shareButton" type="submit" name="btns">Share</button>
    </div>
    </form>
  </div>
</div>
