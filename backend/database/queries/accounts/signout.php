<?php
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory

if(isset($_POST['signout'])) {
  session_unset();
  session_destroy();
  header("Location: " . $rootDirectory . "/");
  ob_end_flush();
  exit();
} 