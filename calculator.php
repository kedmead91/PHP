<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
<?php include "css\calculator.css"?>
</style>
<body>
    <!-- form for calculator buttons and inputs -->
<form method="get" action="calculator.php">
<div class="formstyle">
<h2> Calculator </h2>
Number 1: <input type="number" name="num1"><br><br>
Number 2: <input type="number" name="num2"><br><br>
<button type="submit" name="add">Add</button>
<button type="submit" name="subtract">Subtract</button>
<button type="submit" name="divide">Divide</button>
<button type="submit" name="multiply">Multiply</button><br><br>
<!-- Php for form to submit and return calculatin -->
<div class="result">
    Sum: 
<?php
//if the user presses a button it returns the correct calculation
if (isset($_GET['add'])){
    echo "${_GET['num1']} + ${_GET['num2']} = " . $_GET['num1'] + $_GET['num2'];
}
 elseif(isset($_GET['subtract'])){
    echo "${_GET['num1']} - ${_GET['num2']} = " . $_GET['num1'] - $_GET['num2'];
 }
 elseif(isset($_GET['divide'])){
    echo "${_GET['num1']} Divided By ${_GET['num2']} = " . $_GET['num1'] / $_GET['num2'];
 }
     elseif(isset($_GET['multiply'])) {
         echo "${_GET['num1']} x ${_GET['num2']} = " . $_GET['num1'] * $_GET['num2'];
         
     }
     else{ 

     }

?>
</div>
</div>
    </form>
</body>
</html>