<?php
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory
$rootURL = dirname('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);
if (!empty($_POST)) {
  session_start();
  $_SESSION['role'] = $_POST['role'];
  $_SESSION['username'] = $_POST['username'];
  echo session_status();
  header("Location: /Vrum");
} else {
  session_start();
  if (session_id() && !empty($_SESSION['username'])) {
    echo $_SESSION['role'];
    header("Location: /Vrum");
  } else {
    session_destroy();
    $_SESSION['role'] = null;
    echo $_SESSION['role'];
    header("Location: /Vrum");
  }
}