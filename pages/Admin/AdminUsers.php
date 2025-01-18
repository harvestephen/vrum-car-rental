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
                <form>
                    <input class="usersearch" type="text" placeholder="Search">
                </form>
                <div class="adminusercardlist">
                    <div class="userlistcard">
                        <p>Username</p>
                        <div class="useradminlist-options">
                            <button class="useradminlist-optionsdetails">Details</button>
                            <button class="useradminlist-optionsedit">Edit</button>
                        </div>
                    </div>
                    <div class="userlistcard">
                        <p>Username</p>
                        <div class="useradminlist-options">
                            <button class="useradminlist-optionsdetails">Details</button>
                            <button class="useradminlist-optionsedit">Edit</button>
                        </div>
                    </div>
                    <div class="userlistcard">
                        <p>Username</p>
                        <div class="useradminlist-options">
                            <button class="useradminlist-optionsdetails">Details</button>
                            <button class="useradminlist-optionsedit">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>