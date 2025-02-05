<?php 
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory
if (!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    echo '<script>window.location.href="' . $rootDirectory . '/";</script>';
    exit();
}

$sql = "SELECT * from cars";
$result = $conn -> query($sql);

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
                    <li class="navSelectionadmincurrent"><a href="<?php echo $rootDirectory . '/adminCars'; ?>">Cars</a></li>
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminAppointments'; ?>">Appointments</a></li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="admincarswrapper">
            <div class="admincarstopvar">
                <button>New Car</button>
                <div class="admincarsnavoptions">
                    <button>All</button>
                    <button>Sedan</button>
                    <button>SUV</button>
                    <button>Van</button>
                </div>
            </div>
            <div class="admincarscardlist">
                <?php 
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                        <p>{$row['availability']}</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                        }
                    } else {
                        echo "No records found";
                    }
                ?>
            </div>
        </div>
    </div>

</div>