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
                    <li class="navSelectionadmincurrent"><a
                            href="<?php echo $rootDirectory . '/adminHome'; ?>">Dashboard</a></li>
                    <hr id="admin-divider" />
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminUsers'; ?>">User
                            Accounts</a>
                    </li>
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminCars'; ?>">Cars</a></li>
                    <li class="navSelectionadmin"><a
                            href="<?php echo $rootDirectory . '/adminAppointments'; ?>">Appointments</a></li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="admin-cars-user">
            <div class="admin-cars-dashboard">
                <h1>Cars Count</h1>
                <h3>Total Cars:</h3>
                <p>100</p>
                <h3>Cars Available:</h3>
                <p>75</p>
                <h3>Cars Deployed:</h3>
                <p>25</p>
                <h3>Under Maintenance:</h3>
                <p class="badstat">2</p>
            </div>
            <div class="admin-user-dashboard">
                <h1>User Count</h1>
                <h3>Registered User:</h3>
                <p>1023</p>
                <h3>Suspended:</h3>
                <p class="badstat">0</p>
            </div>
        </div>
        <div class="admin-finance-dashboard-wrapper">
            <div class="admin-finance-dashboard">
                <div class="topfinance">
                    <h1>Sales</h1>
                </div>
                <div class="finance-contents">
                    <div class="finance1">
                        <h2>Total Sales Revenue (₱):</h2>
                        <p>P164,254.23</p>
                        <br>
                        <h2>Daily Sales (₱):</h2>
                        <p>P164,254.23</p>
                        <br>
                        <h2>Monthly Sales (₱):</h2>
                        <p>P164,254.23</p>
                        <br>
                        <h2>Annual Sales (₱):</h2>
                        <p>P164,254.23</p>
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


