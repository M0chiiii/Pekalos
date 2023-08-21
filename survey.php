<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="style.css" rel="stylesheet">
  <link href="navbar.css" rel="stylesheet">
  <body>

    <?php include 'navbar.php'; ?>
      <div class = "surveyResultPanel">
      <div class = "surveyContainer">
      <div class = "surveyResult">
        <h1>Career Analysis</h1>
        <hr>
        <li>Your education level is <?php echo $_POST["educationLvl"];?> </li><br>
        <li>You  want to work in the <?php echo $_POST["industry"];?> industry</li><br>
        <li>You want to work with a <?php echo $_POST["companySize"];?> </li><br>
        <li>You desired annual salary is <?php echo $_POST["salary"];?> </li><br>
        
        <li>You enjoy <?php echo $_POST["environment"];?> work environment</li><br>
        <li>You prefer <?php echo $_POST["leadership"];?> levels of responsibility and leadership</li><br>
        <li>You are able to handle pressure and deadlines <?php echo $_POST["deadlineEffectiveness"];?></li><br>
        <li>You <?php echo $_POST["team"];?> </li><br>
        <li>You would <?php echo $_POST["additionEdu"];?> </li><br>
        <li>You <?php echo $_POST["pubSpeaking"];?> </li><br>
        <li>You are <?php echo $_POST["relocate"];?> relocate for the right opportunity</li><br>
        <li>You would <?php echo $_POST["additionEdu"];?> </li><br><br>
        <a href = "surveyResults.php">See Recommend Careers</a>
      </div>
      </div>
      </div>
    
    <script type="text/javascript" src="myscript.js"></script>
    
    
  </body>
</html>