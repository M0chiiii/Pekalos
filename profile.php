<?php
session_start();

?>

<html>
  <link href="style.css" rel="stylesheet">
  <title>Pekalos</title>
</html>

<?php
  include "navbar.php";
?>

<html>
  
  <div id="profile_container">
    
    <div class = "header" id="profile_bio">
      <img src="Images/Profile/profile.jpg">
      <div class="flex_column">
        <h1><?php echo $_SESSION["fullname"]; ?></h1>
        <h2>Career Path: <?php echo $_SESSION['career'];?></h2>
      </div>
      <a href="logout.php">Logout</a>
    </div>
    
    <div id="profile_career">
    </div>
    
    <div id="profile_social">
    </div>

  </div>
  
</html>

