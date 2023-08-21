<?php

session_start();

?>

<html>
<link href="style.css" rel="stylesheet">
  
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === 'admin' && $password === '1234') {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION["fullname"] = "John Doe";
    $_SESSION['career'] = "None";

        include "navbar.php";
        echo "<div class='verified'> Login successful! </div>";
    } else {
        echo "<div class='verified'> Invalid login credentials. </div>";
  }



}
  
?>
