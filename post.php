<?php
  //session_start(); 
     include("./db.php");
   

       $get_w = "SELECT * FROM post order by id desc";
       $run_w = mysqli_query($con, $get_w);
       $i=0;
       while($row_w=mysqli_fetch_array($run_w)){
        $id = $row_w['id'];
        $content = $row_w['content'];
        $img1 = $row_w['img'];


?>

<div class="post">
  <div class="postWrapper">
    <div class="postTop">
      <div class="postTopLeft">
        <!-- Assuming user.profilePicture is a URL -->
        <img class="postProfileImg" src="./assets/img/p1.jpeg" alt="">
        <!-- Assuming user.username is a string -->
        <span class="postUsername">Risha Bagom</span>
        <!-- Assuming post.date is a string -->
        <span class="postDate">2 houre Ago</span>
      </div>
      <div class="postTopRight">
        <!-- Assuming you have a more options icon -->
        <span class="moreOptionsIcon">More Options</span>
      </div>
    </div>
    <div class="postCenter">
      <!-- Assuming post.desc is a string -->
      <span class="postText"><?php echo  $content;?>"</span>
      <!-- Assuming post.photo is a URL -->
      <img class="postImg" src="./uploads/<?php echo $img1;?>" alt="">
    </div>
    <div class="postBottom">
      <div class="postBottomLeft">
        <!-- Assuming you have like icons -->
        <img class="likeIcon" src="assets/like.png" alt="">
        <img class="likeIcon" src="assets/heart.png" alt="">
        <!-- Assuming like is a number and post.comment is a number -->
        <span class="postLikeCounter">32 people like this</span>
      </div>
      <div class="postBottomMid">
        <!-- Assuming post.comment is a number -->
        <span class="postCommentText">Give Rate</span>
      </div>
      <div class="postBottomRight">
        <!-- Assuming you have a share icon -->
        <span class="postCommentText">Buy Now</span>
      </div>
    </div>
    <div class="postTop">
      <div class="postTopLeft">
      <div class="shareTop">
      <img class="postProfileImg" src="./assets/img/p2.jpeg" alt="">
      <input placeholder="Given Vagitable Rate" class="shareInput" name="content" required>
    </div>
      </div>
      <div class="postTopRight">
        <!-- Assuming you have a more options icon -->
        <span class="moreOptionsIcon">34 taka High rate</span>
      </div>
    </div>
  </div>
</div>

<?php
       }
?>

