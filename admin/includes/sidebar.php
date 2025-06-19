<div id="layoutSidenav_nav" class="sidebar">
    <nav class="sb-sidenav accordion" id="sidenavAccordion">
        <!-- شعار الـ sidebar -->
        <div class="sb-sidenav-logo text-center py-4 mt-4">
            <img src="../assets/img/logo.jpg" alt="Logo" class="rounded-circle" style="width: 80px; height: 80px; border: 3px solid var(--accent);">
        </div>

        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Admin Panel</div>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <span>Dashboard</span>
                </a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'view-register.php' ? 'active' : ''; ?>" href="view-register.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-syringe"></i></div>
                    <span>Requests For Vaccines</span>
                </a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'view-vaccinated.php' ? 'active' : ''; ?>" href="view-vaccinated.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-check-circle"></i></div>
                    <span>Vaccinated Patients</span>
                </a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'send_reminder.php' ? 'active' : ''; ?>" href="send_reminder.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div>
                    <span>Reminder</span>
                </a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'view-admin.php' ? 'active' : ''; ?>" href="view-admin.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-shield"></i></div>
                    <span>Admin Details</span>
                </a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'view-vaccinator.php' ? 'active' : ''; ?>" href="view-vaccinator.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-md"></i></div>
                    <span>Vaccinator Details</span>
                </a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'view-patient.php' ? 'active' : ''; ?>" href="view-patient.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    <span>Patient Details</span>
                </a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'view-vaccine.php' ? 'active' : ''; ?>" href="view-vaccine.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-vial"></i></div>
                    <span>Vaccine Stocks</span>
                </a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'view_events.php' ? 'active' : ''; ?>" href="view_events.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                    <span>Manage Events</span>
                </a>
            </div>
        </div>
    </nav>
</div>

<style>
    :root {
        --primary: #2a4d69;
        --secondary: #e9c46a;
        --accent: #63b7af;
        --dark: #1b263b;
        --light: #f4f1de;
    }

    .sidebar {
        background: var(--dark);
        color: #fff;
        height: 100vh;
        width: 280px;
        position: fixed;
        top: 0;
        left: 0;
        transition: all 0.3s ease;
        overflow-y: auto;
        box-shadow: 5px 0 15px rgba(0, 0, 0, 0.3);
        z-index: 1000;
    }

    .sb-sidenav-logo {
        margin-top: 20px; /* تنزيل الشعار إلى الأسفل */
    }

    .sb-sidenav-menu-heading {
        padding: 1.5rem 1rem 0.5rem;
        font-size: 0.9rem;
        text-transform: uppercase;
        color: var(--secondary);
        letter-spacing: 1.5px;
        font-weight: 600;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .nav-link {
        color: #fff;
        padding: 14px 25px;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        position: relative;
        white-space: nowrap;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 5px;
        height: 100%;
        background: var(--accent);
        transform: translateX(-100%);
        transition: transform 0.3s ease;
    }

    .nav-link:hover::before, .nav-link.active::before {
        transform: translateX(0);
    }

    .nav-link:hover, .nav-link.active {
        background: rgba(233, 196, 106, 0.15);
        color: var(--secondary);
    }

    .sb-nav-link-icon {
        margin-right: 15px;
        width: 20px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .nav-link:hover .sb-nav-link-icon, .nav-link.active .sb-nav-link-icon {
        transform: scale(1.2);
        color: var(--accent);
    }

    @media (max-width: 992px) {
        .sidebar {
            width: 80px;
        }

        .sb-sidenav-menu-heading,
        .nav-link span {
            display: none;
        }

        .nav-link {
            justify-content: center;
            padding: 15px;
        }

        .sb-nav-link-icon {
            margin-right: 0;
        }
    }

    @media (max-width: 576px) {
        .sidebar {
            left: -280px;
        }

        .sidebar.active {
            left: 0;
        }
    }
</style>