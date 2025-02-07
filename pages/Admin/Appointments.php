<?php 
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory
if (!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    echo '<script>window.location.href="' . $rootDirectory . '/";</script>';
    exit();
}
$getAppointmentsSql = "SELECT * FROM appointments JOIN cars ON appointments.car_rented_id = cars.car_id JOIN users ON appointments.appointor_id = users.user_id WHERE appointment_done = 0;";
$resultAppointmentsSql = $conn -> query($getAppointmentsSql);

if (isset($_POST["approve"])) {
    $appointment_id = $_POST["appointmentId"];
    $stmt = $conn -> prepare("UPDATE `appointments` SET `appointment_done` = '1' WHERE (`appointment_id` = ?);");
    $stmt -> bind_param('i', $appointment_id);
    $stmt->execute();
    echo "<script>window.location.href='./adminAppointments';</script>";
}
if (isset($_POST["deny"])) {
    $appointment_id = $_POST["appointmentId"];
    $stmt = $conn -> prepare("UPDATE `appointments` SET `appointment_done` = '1' WHERE (`appointment_id` = ?);");
    $stmt -> bind_param('i', $appointment_id);
    $stmt->execute();
    echo "<script>window.location.href='./adminAppointments';</script>";
}
?>
<div class="AdminPage">
    <!-- Admin Sidebar Menu -->
    <div class="AdminWrapper">
        <div class="admin-sidebar-card-container">
            <!-- Admin Menu List -->
            <div class="admin-sidebar-card-container-2">
                <ul>
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminHome'; ?>">Dashboard</a></li>
                    <hr id="admin-divider" />
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminUsers'; ?>">User Accounts</a>
                    </li>
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminCars'; ?>">Cars</a></li>
                    <li class="navSelectionadmincurrent"><a href="<?php echo $rootDirectory . '/adminAppointments'; ?>">Appointments</a></li>
                    </li>
                </ul>
            </div>
        </div>
        <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="<?php echo $rootDirectory . '/adminHome'; ?>">Dashboard</a>
    <hr id="admin-divider" />
    <a href="<?php echo $rootDirectory . '/adminUsers'; ?>">User Accounts</a>
    <a href="<?php echo $rootDirectory . '/adminCars'; ?>">Cars</a>
    <a href="<?php echo $rootDirectory . '/adminAppointments'; ?>">Appointments</a>
  </div>
  
</div>


<script>
function openNav() {
    const sidebar = document.getElementById("myNav");
    const menuButton = document.getElementById("menuButton");

    // Open sidebar
    sidebar.style.width = "100%";
    sidebar.classList.add("active");

    // Hide the button when sidebar is open
    menuButton.classList.add("hidden");
}

function closeNav() {
    const sidebar = document.getElementById("myNav");
    const menuButton = document.getElementById("menuButton");

    // Close sidebar
    sidebar.style.width = "0%";
    sidebar.classList.remove("active");

    // Show the button again when sidebar is closed
    menuButton.classList.remove("hidden");
}

// Ensure sidebar is closed when the page loads
window.addEventListener("load", function () {
    document.getElementById("myNav").style.width = "0%";
});

</script>
<button class="openspan" id="menuButton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</button>
        <div class="appointmentlistwrapper">
            <div class="adminappointmenttitlebar">
                <h1>Appointment List</h1>
            </div>
            <div class="appointmentcardlist">
                <?php
                while ($row = $resultAppointmentsSql -> fetch_assoc()){
                    echo <<<HTML
                         <div class="appointmentcard">
                            <div class="appointmentinfo">
                                <p>Car: {$row["car_name"]}</p>
                                <p>Renter: {$row["username"]}</p>
                                <p>Date: {$row["appointment_fromDate"]} to {$row["appointment_toDate"]}</p>
                            </div>
                            <div class="appointmentoptions">
                                <form action="" method="post">
                                    <button name="approve" class="appointmentoptionsapprove" type="submit">Approve</button>
                                    <input type="text" hidden value="{$row['appointment_id']}" name="appointmentId">
                                </form>
                                <form action="" method="post">
                                    <button name="deny" type="submit" class="appointmentoptionsdeny">Deny</button>
                                    <input type="text" hidden value="{$row['appointment_id']}" name="appointmentId">
                                </form>
                            </div>
                        </div> 
                        HTML;
                }
                ?>
            </div>
        </div>
    </div>
</div>