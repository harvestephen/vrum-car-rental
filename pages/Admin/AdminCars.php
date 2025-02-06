<?php 
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory
if (!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    echo '<script>window.location.href="' . $rootDirectory . '/";</script>';
    exit();
}

$sql = "SELECT * from cars";
$result = $conn -> query($sql);
include "./pages/Modal/addcar_modal.php";
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
                    <li class="navSelectionadmincurrent"><a href="<?php echo $rootDirectory . '/adminCars'; ?>">Cars</a></li>
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminAppointments'; ?>">Appointments</a></li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="admincarswrapper">
            <div class="admincarstopvar">
                <button id="newcarbtn">New Car</button>
                <div class="admincarsnavoptions">
                    <form method="post">
                        <button type="submit" name="submitAllCars">All</button>
                    </form>
                    <form method="post">
                        <button type="submit" name="submitSedanCars">Sedan</button>
                    </form>
                    <form method="post">
                        <button type="submit" name="submitSuvCars">SUV</button>
                    </form>
                    <form method="post">
                        <button type="submit" name="submitVanCars">Van</button>
                    </form>
                </div>
            </div>
            <div class="admincarscardlist">
                <?php 
                if (isset($_POST["submitAllCars"])) {
                    $sqlAllCars = "SELECT * FROM cars;";
                    $resAllCars = $conn -> query($sqlAllCars);
                    if ($resAllCars->num_rows > 0) {
                        while ($row = $resAllCars->fetch_assoc()) {
                            if ($row['available'] != 0) {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                        Qnty: {$row["Qnty"]} &nbsp;
                                        $brand
                                        <p>Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            } else {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                        Qnty: {$row["Qnty"]} &nbsp;
                                        $brand
                                        <p class="badstat">Not Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            }
                            
                        }
                    } else {
                        echo "No records found";
                    }
                } else if (isset($_POST["submitSedanCars"])) {
                    $sqlSedanCars = "SELECT * FROM cars WHERE type = 'Sedan';";
                    $resSedanCars = $conn -> query($sqlSedanCars);
                    if ($resSedanCars->num_rows > 0) {
                        while ($row = $resSedanCars->fetch_assoc()) {
                            if ($row['available'] != 0) {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                    Qnty: {$row["Qnty"]} &nbsp;
                                    $brand
                                        <p>Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            } else {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                        Qnty: {$row["Qnty"]} &nbsp;
                                        $brand
                                        <p class="badstat">Not Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            }
                            
                        }
                    } else {
                        echo "No records found";
                    }
                } else if (isset($_POST["submitSuvCars"])) {
                    $sqlSuvCars = "SELECT * FROM cars WHERE type = 'SUV';";
                    $resSuvCars = $conn -> query($sqlSuvCars);
                    if ($resSuvCars->num_rows > 0) {
                        while ($row = $resSuvCars->fetch_assoc()) {
                            if ($row['available'] != 0) {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                    Qnty: {$row["Qnty"]} &nbsp;
                                    $brand
                                        <p>Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            } else {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                        Qnty: {$row["Qnty"]} &nbsp;
                                        $brand
                                        <p class="badstat">Not Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            }
                            
                        }
                    } else {
                        echo "No records found";
                    }
                } else if (isset($_POST["submitVanCars"])) {
                    $sqlVanCars = "SELECT * FROM cars WHERE type = 'Van';";
                    $resVanCars = $conn -> query($sqlVanCars);
                    if ($resVanCars->num_rows > 0) {
                        while ($row = $resVanCars->fetch_assoc()) {
                            if ($row['available'] != 0) {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                    Qnty: {$row["Qnty"]} &nbsp;
                                    $brand
                                        <p>Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            } else {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                        Qnty: {$row["Qnty"]} &nbsp;
                                        $brand
                                        <p class="badstat">Not Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            }
                            
                        }
                    } else {
                        echo "No records found";
                    }
                } else {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row['available'] != 0) {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                    Qnty: {$row["Qnty"]} &nbsp;
                                    $brand
                                        <p>Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            } else {
                                $brand = ucwords($row["brand"]);
                                echo <<<HTML
                                <div class="admincarscard">
                                    <p>{$row['car_name']}</p>
                                    <div class="admincarsoptions">
                                        Qnty: {$row["Qnty"]} &nbsp;
                                        $brand
                                        <p class="badstat">Not Available</p>
                                        <button>Edit</button>
                                    </div>
                                </div>
                                HTML;
                            }
                            
                        }
                    } else {
                        echo "No records found";
                    }
                }
                ?>
            </div>
        </div>
    </div>

</div>