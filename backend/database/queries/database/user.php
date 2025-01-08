<?php
$username = "";
if (isset($_POST)) {
  $rawData = file_get_contents("php://input");
  $data = json_decode($rawData, true);

  $username = $data["username"];

  $_POST["username"] = $username;
  echo $_POST["username"];
  
  header("../../../pages/Template/navBar.php");
}