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
            <!-- Admin Menu List -->
            <div class="admin-sidebar-card-container-2">
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
                <div class="adminuserstopvar">
                    <form class="usersearchform" method="post">
                        <input class="usersearch" type="text" placeholder="Username" name="name">
                        <input type="submit" name="submitsearch" class="searchsubmit" value="Search">
                    </form>
                    <div class="admincarsnavoptions">
                    <form method="post">
                        <button type="submit" name="submitUserAll" class="searchsubmit">All</button>
                    </form>
                    </div>
                </div>
                
                <div class="adminusercardlist">
                    
                    <?php 
                    if (isset($_POST["submitsearch"])) {
                        $name = "%" . $_POST["name"] . "%";
                        $stmt = $conn->prepare("SELECT * FROM users WHERE username LIKE ? AND role = 'user';");
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
                            echo <<<HTML
                            <div class="userlistcard">
                                <p>No Record</p>
                                <div class="useradminlist-options">
                                </div>
                            </div>
                            HTML;
                            
                        }
                    } else if (isset($_POST["submitUserAll"])) {
                        $getallusersql = "SELECT * FROM users WHERE role = 'user'";
                        $getallusersResult = $conn -> query($getallusersql);

                        if ($getallusersResult -> num_rows !== 0) {
                            while ($row = $getallusersResult -> fetch_assoc()) {
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
                            echo <<<HTML
                            <div class="userlistcard">
                                <p>No Record</p>
                                <div class="useradminlist-options">
                                </div>
                            </div>
                            HTML;
                            
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