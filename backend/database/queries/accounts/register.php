<?php

//access all variables and functions in connection.php as if the connection.php is written here
include "../../connection/connection.php";
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

if(isset($_POST["register"])){

  // create variables from $_POST['name attribute']
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $confirmPassword = $_POST["confirm-password"];
  $phone = $_POST["phone"];

  //password validation
  if ($password === $confirmPassword) { 
    $hasedPassword = password_hash($password, PASSWORD_BCRYPT);
  }else {
    $errorMsg = "passwrodnotmatch";
    header("location: {$rootDirectory}/../../../../index.php?passwordMsg=" . $errorMsg);
  }

  //database logic to add items
}