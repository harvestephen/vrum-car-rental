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
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/cars'; ?>">Dashboard</a></li>
                    <hr id="admin-divider" />
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminUsers'; ?>">User Accounts</a>
                    </li>
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminCars'; ?>">Cars</a></li>
                    <li class="navSelectionadmin"><a href="<?php echo $rootDirectory . '/adminAppointments'; ?>">Appointments</a></li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="admincarswrapper">
            <div class="admincarstopvar">
                <button>Add New Car</button>
                <div class="admincarsnavoptions">
                    <button>All</button>
                    <button>Sedan</button>
                    <button>SUV</button>
                    <button>Van</button>
                </div>
            </div>
            <div class="admincarscardlist">
                <div class="admincarscard">
                    <p>Carname</p>
                    <div class="admincarsoptions">
                        <p>Available</p>
                        <button>Edit</button>
                    </div>
                </div>
                <div class="admincarscard">
                    <p>Carname</p>
                    <div class="admincarsoptions">
                        <p>Available</p>
                        <button>Edit</button>
                    </div>
                </div>
                <div class="admincarscard">
                    <p>Carname</p>
                    <div class="admincarsoptions">
                        <p>Available</p>
                        <button>Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>