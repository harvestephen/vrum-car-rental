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
        <div class="appointmentlistwrapper">
            <div class="titlebar">
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
                        <button>Approve</button>
                        <button>Deny</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>