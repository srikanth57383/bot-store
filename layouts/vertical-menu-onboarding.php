<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark">
                    <div class="pb-2">
                    
                    <span class="logo-lg">
                        <img src="assets/images/IVEOND-LOGO.png" alt="" height="30"> <span class="logo-txt"></span>
                    </span>
                    </div>
                </a>

                <a href="index.php" class="logo logo-light">
                    
                    <span class="logo-lg">
                        <img src="assets/images/IVEOND-LOGO.png" alt="" height="30"> <span class="logo-txt"></span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
        
        </div>

        <div class="d-flex">

          
            

                   
            </div>

            

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                    <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo  $_SESSION["username"] ?>.</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <?php echo $language["Logout"]; ?></a>
                </div>
            </div>

        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
            <li>
                    <a href="index.php">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Home</span>
                    </a>
                </li>
            <li>
                    <a href="on_boarding.php">
                        <i data-feather=""></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="employee-boarding-form.php">
                        <i data-feather=""></i>
                        <span data-key="t-dashboard">On Boarding</span>
                    </a>
                </li>
                <li>
                    <a href="offbording.php">
                        <i data-feather=""></i>
                        <span data-key="t-dashboard">Off Boarding</span>
                    </a>
                </li>
                <li>
                    <a href="old_employees.php">
                        <i data-feather=""></i>
                        <span data-key="t-dashboard">Old Employees</span>
                    </a>
                </li>
            </ul>
            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5"> 
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->