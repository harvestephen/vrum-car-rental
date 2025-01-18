<?php 
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory
if (!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    echo '<script>window.location.href="' . $rootDirectory . '/";</script>';
    exit();
}
?>
<div class="AdminPage">
    <!-- Admin Sidebar Menu -->
    <div class="AdminWrapper">
        <div class="admin-sidebar-card-container">
            <!-- Admin Menu Header -->
            <div>

            </div>
            <!-- Admin Menu List -->
            <div>
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
        <div class="appointmentlistwrapper">
            <div class="adminappointmenttitlebar">
                <h1>Appointment List</h1>
            </div>
            <div class="appointmentcardlist">
                <div class="appointmentcard">
                    <div class="appointmentinfo">
                        <p>Car: Carname</p>
                        <p>Renter: user</p>
                        <p>Date: from to to</p>
                    </div>
                    <div class="appointmentoptions">
                        <button class="appointmentoptionsapprove">Approve</button>
                        <button class="appointmentoptionsdeny">Deny</button>
                    </div>
                </div>
                <div class="appointmentcard">
                    <div class="appointmentinfo">
                        <p>Car: Carname</p>
                        <p>Renter: user</p>
                        <p>Date: from to to</p>
                    </div>
                    <div class="appointmentoptions">
                        <button class="appointmentoptionsapprove">Approve</button>
                        <button class="appointmentoptionsdeny">Deny</button>
                    </div>
                </div>
                <div class="appointmentcard">
                    <div class="appointmentinfo">
                        <p>Car: Carname</p>
                        <p>Renter: user</p>
                        <p>Date: from to to</p>
                    </div>
                    <div class="appointmentoptions">
                        <button class="appointmentoptionsapprove">Approve</button>
                        <button class="appointmentoptionsdeny">Deny</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>