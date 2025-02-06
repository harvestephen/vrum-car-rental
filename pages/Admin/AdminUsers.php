<?php 
$rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory
if (!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    echo '<script>window.location.href="' . $rootDirectory . '/";</script>';
    exit();
}


$sql = "SELECT * FROM users WHERE role = 'user'";
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
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminHome'; ?>">Dashboard</a>
                    </li>
                    <hr id="admin-divider" />
                    <li class="navSelectionadmincurrent"><a href="<?php echo $rootDirectory . '/adminUsers'; ?>">User
                            Accounts</a>
                    </li>
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminCars'; ?>">Cars</a></li>
                    <li class="navSelectionadmin"><a
                            href="<?php echo $rootDirectory . '/adminAppointments'; ?>">Appointments</a></li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="adminUsersWrapper">
            <h1>User List</h1>
            <div class="adminusercontents">
                <form class="usersearchform" method="post">
                    <input class="usersearch" type="text" placeholder="Username" name="name">
                    <input type="submit" name="submit" class="searchsubmit" value="Search">
                </form>
                <div class="adminusercardlist">
                    
                    <?php 
                    if (isset($_POST["submit"])) {
                        $name = "%" . $_POST["name"] . "%";
                        $stmt = $conn->prepare("SELECT * FROM users WHERE username LIKE ?;");
                        $stmt->bind_param("s", $name);
                        $stmt->execute();
                        $resultGetName = $stmt -> get_result();
                    
                        if ($resultGetName -> num_rows !== 0) {
                            while ($row = $resultGetName -> fetch_assoc()) {
                                echo <<<HTML
                                    <div class="userlistcard">
                                        <p>{$row['username']}</p>
                                        <div class="useradminlist-options">
                                            <button class="useradminlist-optionsdetails">Details</button>
                                            <button class="useradminlist-optionsedit">Edit</button>
                                        </div>
                                    </div>
                                    HTML;
                            }
                        } else {
                            echo "no record";
                        }
                    } else {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo <<<HTML
                                    <div class="userlistcard">
                                        <p>{$row['username']}</p>
                                        <div class="useradminlist-options">
                                            <button class="useradminlist-optionsdetails">Details</button>
                                            <button class="useradminlist-optionsedit">Edit</button>
                                        </div>
                                    </div>
                                    HTML;
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

</div>