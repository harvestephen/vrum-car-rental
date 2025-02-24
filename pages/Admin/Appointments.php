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
    $appointor_id = $_POST["appointor_id"];
    $car_rented_id = $_POST["car_rented_id"];
    $appointmentStatus = $_POST["appointmentStatus"];
    $price = $_POST["price"];
    $num_pick = $_POST["num_pick"] + 1;
    $available = $_POST["available"] - 1;
    $appointment_fromDate = $_POST["appointment_fromDate"];
    $approve = "Approved";
    

    $stmtUpdateSales = $conn -> prepare("INSERT INTO sales (sales, sales_date_made) VALUES (?, ?);");
    $stmtUpdateSales -> bind_param("is", $price, $appointment_fromDate);
    $stmtUpdateSales -> execute();

    $stmt = $conn -> prepare("UPDATE `appointments` SET `appointment_done` = '1', `appointmentStatus` = ? WHERE (`appointment_id` = ?);");
    $stmt -> bind_param('si', $approve, $appointment_id);
    $stmt->execute();

    $stmt = $conn -> prepare("UPDATE `cars` SET `available` = ?, `num_pick` = ? WHERE `car_id` = ?;");
    $stmt -> bind_param('iii', $available, $num_pick, $car_rented_id);
    $stmt->execute();
    echo "<script>window.location.href='./adminAppointments';</script>";
}
if (isset($_POST["deny"])) {
    $deny = "Denied";
    $appointment_id = $_POST["appointmentId"];
    $stmt = $conn -> prepare("UPDATE `appointments` SET `appointment_done` = '1', `appointmentStatus` = ? WHERE (`appointment_id` = ?);");
    $stmt -> bind_param('si',  $deny, $appointment_id);
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
    const icon = menuButton.querySelector("i");

    // Check if the sidebar is open
    if (sidebar.classList.contains("active")) {
        // Close sidebar
        sidebar.style.width = "0%";
        sidebar.classList.remove("active");

        // Change button back to moon icon
        icon.classList.remove("fa-xmark");
        icon.classList.add("fa-moon");
    } else {
        // Open sidebar
        sidebar.style.width = "100%";
        sidebar.classList.add("active");

        // Change button to close (X) icon
        icon.classList.remove("fa-moon");
        icon.classList.add("fa-xmark");
    }
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
                    $price = $row["price"] * $row["priceMultiplyer"];
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
                                    <input type="number" hidden value="{$row['appointment_id']}" name="appointmentId"/>
                                    <input type="number" hidden value="{$row['appointor_id']}" name="appointor_id"/>
                                    <input type="number" hidden value="{$row['car_rented_id']}" name="car_rented_id"/>
                                    <input type="text" hidden value="{$row['appointmentStatus']}" name="appointmentStatus"/>
                                    <input type="number" hidden value="{$price}" name="price"/>
                                    <input type="text" hidden value="{$row['appointment_fromDate']}" name="appointment_fromDate"/>
                                    <input type="number" hidden value="{$row['available']}" name="available"/>
                                    <input type="number" hidden value="{$row['num_pick']}" name="num_pick"/>
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