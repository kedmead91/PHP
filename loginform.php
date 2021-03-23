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

    $username = $_POST['username'];
    $password = $_POST['password'];

    //check username length

    if (strlen($username)<5) {
        echo "Error Username too short";
    } elseif (strlen($password) <5) {
        //check password length
        echo "Error Password too short";

        //check if password has a number
    } elseif (!preg_match("#[0-9]+#", $password)) {
        echo "No number in Password";
        //check if password has a number


    } else {
        // checks that the users password matches encryption algorithm & submits form
        $my_password = "Houses45";
        //echo "Plain password: ". $my_password;
        //echo "<br />";
        $hashed_password = password_hash($my_password,PASSWORD_BCRYPT);

        if (password_verify($password, $hashed_password)){
            echo "Login accepted";
            $file_handling =fopen('login.txt', 'a+');
            fwrite($file_handling, 'Your Login Name is: ' . $username);
            fwrite($file_handling, "\n");
            fwrite($file_handling, 'Your Password is: ' . $password . ' ');
            fwrite($file_handling, "\n");
            fwrite($file_handling, 'With the Blowfish Algorithm ' . $hashed_password);
            fwrite($file_handling, "\n");
            fwrite($file_handling, 'Password Matches Encryption');
            fclose($file_handling);
        } else {
            echo "Login Invalid";
        }
    }
    ?>


</div>
<!--footer of page-->
<?php include "footer.html"?>
</body>
</html>