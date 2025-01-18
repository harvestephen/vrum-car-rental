<?php
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory
$rootURL = str_replace("/backend/database/queries/accounts", "", $rootDirectory);
if (!empty($_POST)) {
  session_start();
  $_SESSION['role'] = $_POST['role'];
  $_SESSION['username'] = $_POST['username'];
  header("Location: " . $rootURL);
} else {
  session_start();
  if (session_id() && !empty($_SESSION['username'])) {
    header("Location: " . $rootURL);
  } else {
    session_destroy();
    $_SESSION['role'] = null;
    header("Location: " . $rootURL);
  }
}