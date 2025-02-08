<?php
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory
if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    session_unset();
    session_destroy();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Location: ./index.php");
    exit();
}
?>

<!-- User Menu Modal -->
<div id="userMenuModal" class="userModal">
  <div class="userModalBox">
    <ul class="userMenuList">
      <?php 
      if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        echo '<li><a href="?logout=true" class="sign-out">Sign Out</a></li>';
      } else {
        echo '<li><a href="' . $rootDirectory . '/book">Booked Cars</a></li>';
        echo '<hr />';
        echo '<li><a href="?logout=true" class="sign-out">Sign Out</a></li>';
      }
      ?>
      
    </ul>
  </div>
</div>