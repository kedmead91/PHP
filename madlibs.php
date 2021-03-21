<html>
  <head>
    <title>Madlibs</title>
  </head>
  <body>
<!--html form -->
<form action="madlibs.php" method="post">
Roses are ...
<input type="text" name="roses" maxlength="50">
<br><br>
Violets are ...
<input type="text" name="violets" maxlength="50">
<br><br>
Sugar is ...
<input type="text" name="sugar" maxlength="50">
<br><br>
And I love ...
<input type="text" name="andIlove" maxlength="50">
<br><br>
<input type="submit" name="formSubmit" value="Submit">
</form>
<!--php gets user input and displays it after they press submit-->
<br>
Roses are... <?php echo $_POST["roses"] ?> 
<br>
Violets are... <?php echo $_POST["violets"] ?>
<br>
Sugar is...<?php echo $_POST["sugar"] ?>
<br>
And I Love...<?php echo $_POST["andIlove"] ?>
<br>

  </body>
</html>