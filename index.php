<?php
session_start();
include "./backend/database/init.php";
$currentURL = parse_url($_SERVER['REQUEST_URI'])['path']; // Get current URL
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory (RELATIVE)
$rootURL = dirname('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);
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

  //Website Router
  switch ($currentURL) {
    //Home Page Links
    case "{$rootDirectory}/":
    case "{$rootDirectory}/index.php":
    case "{$rootDirectory}/index.php":
      if ( isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        include './pages/HomeDefault/adminHome.php';
      } else {
        include './pages/HomeDefault/userHome.php';
      }
      break;
    case "{$rootDirectory}/adminHome":
    case "{$rootDirectory}/adminHome/":
      include './pages/HomeDefault/adminHome.php';
      break;

    //Footer Links
    case "{$rootDirectory}/cars":
    case "{$rootDirectory}/cars/":
      include './pages/Users/cars.php';
      break;
    case "{$rootDirectory}/book":
    case "{$rootDirectory}/book/":
      include './pages/Users/BookedCars.php';
      break;
    case "{$rootDirectory}/about":
    case "{$rootDirectory}/about/":
      include './pages/Users/AboutUs.php';
      break;
    case "{$rootDirectory}/terms":
    case "{$rootDirectory}/terms/":
      include './pages/Users/Terms.php';
      break;
    case "{$rootDirectory}/privacy":
    case "{$rootDirectory}/privacy/":
      include './pages/Users/privacy.php';
      break;
    case "{$rootDirectory}/contacts":
    case "{$rootDirectory}/contacts/":
      include './pages/Users/contacts.php';
      break;
    case "{$rootDirectory}/":
    case "{$rootDirectory}/index.php/":
      include './pages/HomeDefault/userHome.php';
      break;

    //Modal Links
    case "{$rootDirectory}/termsModal":
    case "{$rootDirectory}/termsModal/":
      include './pages/Modals/terms_modal.php';
      break;

    case "{$rootDirectory}/confirmModal":
    case "{$rootDirectory}/confirmModal/":
      include './pages/Modals/confirm_modal.php';
      break;
    case "{$rootDirectory}/submitRegister":
      include './backend/database/queries/accounts/register.php';
      break;
    case "{$rootDirectory}/adminCars":
      include './pages/Admin/AdminCars.php';
      break;
    case "{$rootDirectory}/adminUsers":
      include './pages/Admin/AdminUsers.php';
      break;
    case "{$rootDirectory}/adminAppointments":
      include './pages/Admin/Appointments.php';
      break;
    default:
      echo "error 404";
  }
  include './pages/Template/footer.php';
  ?>
  <script src="<?php echo $rootDirectory . "/main.js" ?>"></script>
</body>

</html>