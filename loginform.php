<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "css\loginform.css" ?>
    </style>
    <title>Document</title>
</head>
<body>
<!-- header of page -->
<?php include "header.html"?>
​
<!-- login form html code -->
​
<div class="form_container">
    <form method="post" action="loginform.php">
        <h2>Please Login</h2><br>
        ​
        <label>
            <input type="text" name="username" placeholder="Username">
        </label><br><br>
        <label>
            <input type="password" name="password" placeholder="Password">
        </label>
        <br><br>
        <input type="submit" value="Login">
        <br>
    </form>
    <br><br>
    <?php
    //variables for username and password
    //submits data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //checks password length and if password has a number
      if (preg_match('/[A_Za-z]/', $password) &&preg_match('#[0-9]+#', $password)){
      echo "<div id='accepted'> Thank you, Login accepted! </div>";
       if (!strlen($password)<5){
       // encrypts users chosen password using blow fish algorithm
       // writes username, password and encrypted password to file
     $hashed_password = password_hash($password,PASSWORD_BCRYPT);
     $login =fopen('login.txt', 'a+');
     file_put_contents('login.txt', "Your username is: $username \nYour password is: $password \nEncrypted with the Blowfish Algorithm: $hashed_password \n");
}
}
     //checks users password matches encrypted password and writes to external file if correct

     if (password_verify($password, $hashed_password)){
      fwrite($login, "Plain Text and Encrypted Password Matches");
      fclose($login);

      // Error message if invalid password is put in
     }else{
        echo "<div id='error'> Error, Password Too Short Or Missing a Number</div>";
      }
    ?>
</div>
<!--footer of page-->
<?php include "footer.html"?>
</body>
</html>