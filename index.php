<?php 
/**
   * Main entry point :)
   * 
   * Location: /E:/Workspace/XAMPP/Vrum/index.php
   */
?>
<!DOCTYPE html>
<html lang="en">
<?php require './pages/Template/header.php'; ?>
<body>
  <?php
  include './pages/navBar.php';
  $currentURL = $_SERVER['REQUEST_URI']; // Get current URL
  $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory

  //Website Router
  switch ($currentURL) {
    case "{$rootDirectory}/":
    case "{$rootDirectory}/index.php":
      include './pages/HomeDefault/userHome.php';
      break;
    case "{$rootDirectory}/cars":
    case "{$rootDirectory}/cars/":
      include './pages/cars.php';
      break;
    case "{$rootDirectory}/about":
    case "{$rootDirectory}/about/":
      include './pages/AboutUs.php';
      break;
  }
  include './pages/footer.php';
  ?>
  <script src="<?php echo $rootDirectory . "/main.js"?>"></script>
</body>

</html>