<?php  
  session_start();  
if (!isset($_SESSION['username'])) { 

    $_SESSION['msg'] = "You must log in first"; 

    header('location: login.php'); 

  } 

  if (isset($_GET['logout'])) 
  { 

    session_destroy(); 

    unset($_SESSION['username']); 

    header("location: login.php"); 

  } 

?> 

<!DOCTYPE html> 

<html> 

<head> 

<title>Home</title> 

<link rel="stylesheet" type="text/css" href="style.css"> 

</head> 

<body> 

 <div class="sustainability-message">
  <h1>Global Sustainability Forum</h1>
  <p>
    "Together, we can shape a sustainable future — where every choice we make echoes with responsibility for our planet and generations to come."
  </p>
</div>

<div class="content"> 

    <!-- notification message --> 

    <?php if (isset($_SESSION['success'])) : ?> 

      <div class="error success" > 

        <h3> 

          <?php  

            echo $_SESSION['success'];  

            unset($_SESSION['success']); 

          ?> 

        </h3> 

      </div> 

    <?php endif ?> 

    

 

    <!-- logged in user information --> 

    <?php  if (isset($_SESSION['username'])) : ?> 

      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p> 

      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p> 

    <?php endif ?> 
    </div>
<div class="container">
    <!-- Input Form -->
    <div class="form-container">
        <h1>Post Forum</h1>
        <input type="text" id="userName" placeholder="Enter your Title or Name" />
        <textarea id="postContent" placeholder="Write your post"></textarea>
        <button id="button" onclick="addPost()">Add Post</button>
    </div>

    <!-- Posts Display -->
    <div id="posts" class="posts-container"></div>
</div>

<script src="script.js"></script>

    <script src="script.js"></script>

 
</body> 
</html> 
