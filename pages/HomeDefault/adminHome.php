<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>

<div class="">
    <!-- Admin Sidebar Menu -->
    <div>
        <div class="admin-sidebar-card-container">
            <!-- Admin Menu Header -->
            <div>

            </div>
            <!-- Admin Menu List -->
            <div>
                <ul>
                    <li class="adminNavOption"><a class="navSelection" href=<?php echo $rootDirectory . "/cars"?>>Dashboard</a></li>
                    <li class="adminNavOption"><a class="navSelection" href=<?php echo $rootDirectory . "/cars"?>>User Accounts</a></li>
                    <li class="adminNavOption"><a class="navSelection" href=<?php echo $rootDirectory . "/cars"?>>Cars</a></li>
                    <li class="adminNavOption"><a class="navSelection" href=<?php echo $rootDirectory . "/cars"?>>Rental Cars</a></li>
                    <li class="adminNavOption"><a class="navSelection" href=<?php echo $rootDirectory . "/cars"?>>Sales Report</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>