<!DOCTYPE html>
<html>

<head
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="style.css" rel="stylesheet">
  <link href="navbar.css" rel="stylesheet">

</head>
  
<body>
  <script src="script.js"></script>
  
  <div class = "sticky" id = "navbar">

    <div class = "container">
      <form action = "" class = "searchbar" autocomplete="off">
        <input type = "text" oninput="display()" placeholder = "Search" id = "search_input">
        
      </form>
      <div class = "results">
        <div id = "searches">
        </div>
      </div>
    </div>

    <div id = "profilename">
      <?php 
        if (isset($_SESSION["username"])) {
          echo ($_SESSION["username"]);
        }
      ?>
    </div>
    
    <div id = "profilebutton">
      <?php
          if (isset($_SESSION["username"])) {
          echo ("<a href='profile.php'><img src='Images/Navbar/profile.png'></a>");
          } else {
          echo ("<a href='login_page.php'><img src='Images/Navbar/profile.png'></a>");
          } 
      ?>
    </div>
    
    <div id = "sidenavbar">
      
    </div>
    
    <div id = "logobutton">
      <a href="index.php"><img src="Images/Navbar/logo.png"></a>
    </div>
    
    <button id = "menubutton" type="button" onclick="showsidebar()">
      <img src = "Images/Navbar/menu.png"> 
    </button>
  </div>

  

  


  

</body>
</html>