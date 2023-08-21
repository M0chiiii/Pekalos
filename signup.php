<html>
  <link rel="stylesheet" type="text/css" href="style.css">
  <head>
    <?php include "navbar.php"; ?>
    <title>Signup Page</title>
  </head>

  <body>
    <div class="signupmenu">
      <div class="signuptext">
        <h2>Signup Page</h2>
        <hr>
        <br>
        <form action="createverify.php" method="post">
          User Name:<br>
          <input type="text" name="user" required>
          <br><br>
          Password:<br>
          <input type="password" name="pass" required>
          <br><br>
          Email:<br>
          <input type="email" required>
          <br><br>
          <input type="submit" value="Signup">
          <br><br>
        </form>
      </div>
    </div>
  </body>
</html>

