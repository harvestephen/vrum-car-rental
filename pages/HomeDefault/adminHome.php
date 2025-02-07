<?php 
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory
if (!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    echo '<script>window.location.href="' . $rootDirectory . '/";</script>';
    exit();
}

$currentWeek = (int) date("W") - 1;
$currentMonth = date("m");

$sqlAnnual = "SELECT YEAR(sales_date_made) AS year, SUM(sales) AS total_sales FROM sales GROUP BY year;";
$sqlMonthly = "SELECT YEAR(sales_date_made) AS year, MONTH(sales_date_made) AS month, SUM(sales) AS total_sales FROM sales WHERE MONTH(sales_date_made) = " . $currentMonth . " GROUP BY year, month;";
$sqlWeekly = "SELECT YEAR(sales_date_made) AS year, WEEK(sales_date_made) AS week, SUM(sales) AS total_sales FROM sales WHERE WEEK(sales_date_made) = " . 05 . " GROUP BY year, week;";
$sqlTotal = "SELECT SUM(sales) AS total_sales FROM sales;";

$resultAnnual = $conn -> query($sqlAnnual);
$resultMonthly = $conn -> query($sqlMonthly);
$resultWeekly = $conn -> query($sqlWeekly);
$resultTotal = $conn -> query($sqlTotal);

$sqlTotalCars = "SELECT Qnty FROM cars;";
$sqlAvailableCars = "SELECT available FROM cars;";
$sqlUnavailableCars = "SELECT Qnty, available FROM cars;";

$resultTotalCars = $conn -> query($sqlTotalCars);
$resultAvailableCars = $conn -> query($sqlAvailableCars);
$resultUnavailableCars = $conn -> query($sqlUnavailableCars);

$sqlTotalUsers = "SELECT * FROM users WHERE role = 'user';";
$sqlSuspendedUsers = "SELECT * FROM users WHERE status = 'bad'";

$resultTotalUsers= $conn -> query($sqlTotalUsers);
$resultSuspendedUsers= $conn -> query($sqlSuspendedUsers);

?>
<div class="AdminPage">
    <!-- Admin Sidebar Menu -->
    <div class="AdminWrapper">
        <div class="admin-sidebar-card-container">
            <div class="admin-sidebar-card-container-2">
                <ul>
                    <li class="navSelectionadmincurrent"><a
                            href="<?php echo $rootDirectory . '/adminHome'; ?>">Dashboard</a></li>
                    <hr id="admin-divider" />
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminUsers'; ?>">User Accounts</a>
                    </li>
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminCars'; ?>">Cars</a></li>
                    <li class="navSelectionadmin"><a
                            href="<?php echo $rootDirectory . '/adminAppointments'; ?>">Appointments</a></li>
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
  document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
window.addEventListener("load", function () {
  document.getElementById("myNav").style.width = "0%";
});

</script>
<span class="openspan" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<div class="dashwrapper">
        <div class="admin-cars-user">
            
            <div class="admin-cars-dashboard">
                <h1>Cars Count</h1>
                <h3>Total Cars:</h3>
                <p>
                    <?php
                        $totalCars = 0;
                        while ($row = $resultTotalCars -> fetch_assoc()) {
                            $currentQnty =  (int) $row["Qnty"];
                            $totalCars += $currentQnty;
                        }
                        echo $totalCars;
                    ?>
                </p>
                <h3>Cars Available:</h3>
                <p>
                    <?php
                        $totalAvailableCars = 0;
                        while ($row = $resultAvailableCars -> fetch_assoc()) {
                            $currentQnty =  (int) $row["available"];
                            $totalAvailableCars += $currentQnty;
                        }
                        echo $totalAvailableCars;
                    ?>
                </p>
                <h3>Cars Unavailable:</h3>
                <p class="badstat">
                    <?php
                        $totalUnavailableCars = 0;
                        while ($row = $resultUnavailableCars -> fetch_assoc()) {
                            $unavailableRow = (int) $row['Qnty'] - (int) $row['available'];
                            $totalUnavailableCars += $unavailableRow;
                        }
                        echo $totalUnavailableCars;
                    ?>
                </p>
            </div>
            <div class="admin-user-dashboard">
                <h1>User Count</h1>
                <h3>Registered User:</h3>
                <p>
                    <?php
                        $totalUsers = 0;
                        while ($row = $resultTotalUsers -> fetch_assoc()) {
                            $totalUsers += 1;
                        }
                        echo $totalUsers;
                    ?>
                </p>
                <h3>Suspended:</h3>
                <p class="badstat">
                <?php
                        $totalSuspendedUsers = 0;
                        while ($row = $resultSuspendedUsers -> fetch_assoc()) {
                            $totalSuspendedUsers += 1;
                        }
                        echo $totalSuspendedUsers;
                    ?>
                </p>
            </div>
        </div>
        <div class="admin-finance-dashboard-wrapper">
            <div class="admin-finance-dashboard">
                <div class="topfinance">
                    <h1>Sales</h1>
                </div>
                <div class="finance-contents">
                    <div class="finance1">
                        <h2>Total Sales (₱):</h2>
                        <p>₱
                        <?php
                            while ($row = $resultTotal->fetch_assoc()) {
                                echo number_format($row["total_sales"], 2);
                            }
                        ?>
                        </p>
                        <br>
                        <h2>Weekly Sales (₱):</h2>
                        <p>₱
                        <?php
                            if ($resultWeekly -> num_rows !== 0) {
                                while ($row = $resultWeekly->fetch_assoc()) {
                                    echo number_format($row["total_sales"], 2);
                                }
                            } else {
                                echo number_format(0, 2);
                            }
                        ?>
                        </p>
                        <br>
                        <h2>Monthly Sales (₱):</h2>
                        <p>₱
                        <?php
                            if ($resultMonthly -> num_rows !== 0) {
                                while ($row = $resultMonthly->fetch_assoc()) {
                                    echo number_format($row["total_sales"], 2);
                                }
                            } else {
                                echo number_format(0, 2);
                            }
                        ?>
                        </p>
                        <br>
                        <h2>Annual Sales (₱):</h2> 
                        <p>₱
                        <?php
                            if ($resultAnnual -> num_rows !== 0) {
                                while ($row = $resultAnnual->fetch_assoc()) {
                                    echo number_format($row["total_sales"], 2);
                                }
                            } else {
                                echo number_format(0, 2);
                            }
                        ?>
                        </p>
                    </div>
                    <div class="finance2">
                        <div>        
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</div>


