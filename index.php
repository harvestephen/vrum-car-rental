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
  include './pages/Template/navBar.php';
  $currentURL = $_SERVER['REQUEST_URI']; // Get current URL
  $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory (RELATIVE)

  //Website Router
  switch ($currentURL) {
    case "{$rootDirectory}/":
    case "{$rootDirectory}/index.php":
      include './pages/HomeDefault/userHome.php';
      break;
    case "{$rootDirectory}/cars":
    case "{$rootDirectory}/cars/":
      include './pages/Users/cars.php';
      break;
    case "{$rootDirectory}/about":
    case "{$rootDirectory}/about/":
      include './pages/Users/AboutUs.php';
      break;
  }
  include './pages/Template/footer.php';
  ?>
  <script src="<?php echo $rootDirectory . "/main.js"?>"></script>
</body>

</html>