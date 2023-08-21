<html>

<link rel="stylesheet" type="text/css" href="style.css">

<head>
  <?php include "navbar.php"; ?>
  <title>Pekalos</title>
</head>
<body>
<!-- the action tells the form what code to load to process the request from Submit -->
<div class="loginmenu">
  <div class="logintext">
  <h2> Login Page</h2>
  <hr>
  <br>
  <form action="verify.php" method="post">
      User Name:<br>
      <input type="text" name="username" required><br><br>
      Password:<br>
      <input type="password" name="password" required><br><br>
      <input type="submit" name="submit" value="Login">
  </form>
    <hr>
    <br>
    <a href="signup.php">Create Account</a>
  </div>
</div>
</body>
</html>