<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28" alt="Logo">
        </a>

        <a role="button" class="navbar-burger has-text-light" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu is-active">
        <div class="navbar-end">
            <a href="/dashboard" class="navbar-item link">
                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                <span>Dashboard</span>
            </a>

            <a href="/registry/accomplishment" class="navbar-item link">
                <span class="icon"><i class="fas fa-check-circle"></i></span>
                <span>Accomplishments</span>
            </a>

            <a class="navbar-item link">
                <span class="icon"><i class="fas fa-users"></i></span>
                <span>Users</span>
            </a>

            <!-- Reports Dropdown -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link link">
                    <span class="icon"><i class="fas fa-file-alt"></i></span>
                    <span>Reports</span>
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item link">
                        Accomplishment Report
                    </a>
                    <a class="navbar-item link">
                        User Report
                    </a>
                </div>
            </div>
        </div>

        <!-- Account Settings Dropdown -->
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    <span class="icon"><i class="fas fa-user-circle"></i></span>
                    <span>Account</span>
                </a>

                <div class="navbar-dropdown is-right">
                    <a class="navbar-item">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span>Settings</span>
                    </a>
                    <a href="modules/authentications/logout.php" class="navbar-item">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</nav>