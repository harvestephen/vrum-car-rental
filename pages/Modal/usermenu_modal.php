<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>
<?php

if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    session_unset();
    session_destroy();
    header("Location: ./index.php");
    exit();
}
?>

<!-- User Menu Modal -->
<div id="userMenuModal" class="userModal">
  <div class="userModalBox">
    <ul class="userMenuList">
      <li><a href="#">Profile</a></li>
      <li><a href="<?php echo $rootDirectory . "/book"?>">Booked Cars</a></li>
      <li><a href="#">History</a></li>
      <hr />
      <li><a href="?logout=true" class="sign-out">Sign Out</a></li>
    </ul>
  </div>
</div>