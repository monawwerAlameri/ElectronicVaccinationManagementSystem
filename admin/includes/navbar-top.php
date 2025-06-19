<nav class="sb-topnav navbar navbar-expand navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand ps-3" href="index.php">
            <span>Vaccination System</span>
        </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-white" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group search-container">
                <input type="text" class="form-control search-input" placeholder="Search..." aria-label="Search">
                <span class="input-group-text search-icon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="admin_profile.php">My Profile</a></li>
                    <li>
                        <form action="../logout.php" method="POST">
                            <button type="submit" class="dropdown-item" name="logout_btn">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<style>
    :root {
        --primary: #2a4d69;
        --secondary: #e9c46a;
        --accent: #63b7af;
        --dark: #1b263b;
        --light: #f4f1de;
    }

    .sb-topnav {
        background: linear-gradient(90deg, var(--primary), var(--dark));
        padding: 0.8rem 1rem;
        position: sticky; /* جعل الـ navbar يتمرر مع الصفحة */
        top: 0;
        z-index: 900; /* أقل من z-index الـ sidebar ليظهر الـ sidebar فوقه */
        width: 100%; /* عرض كامل */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        color: var(--light);
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .navbar-brand:hover {
        color: var(--secondary);
    }

    .nav-link {
        color: var(--light);
    }

    .nav-link:hover {
        color: var(--secondary);
    }

    .dropdown-menu {
        background: var(--dark);
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .dropdown-item {
        color: var(--light);
    }

    .dropdown-item:hover {
        background: var(--accent);
        color: var(--dark);
    }

    /* حقل البحث الجذاب */
    .search-container {
        position: relative;
        max-width: 300px;
    }

    .search-input {
        border: none;
        border-radius: 25px;
        background: rgba(255, 255, 255, 0.1);
        color: var(--light);
        padding: 8px 40px 8px 15px;
        transition: all 0.3s ease;
        height: 38px;
    }

    .search-input:focus {
        background: rgba(255, 255, 255, 0.2);
        outline: none;
        box-shadow: 0 0 8px rgba(99, 183, 175, 0.5);
    }

    .search-input::placeholder {
        color: var(--light);
        opacity: 0.7;
    }

    .search-icon {
        background: var(--accent);
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--dark);
        position: absolute;
        right: 4px;
        top: 50%;
        transform: translateY(-50%);
        transition: background 0.3s ease;
    }

    .search-icon:hover {
        background: var(--secondary);
    }

    @media (max-width: 576px) {
        .navbar-brand span {
            font-size: 0.9rem; /* تقليل حجم النص للشاشات الصغيرة */
        }

        .search-container {
            max-width: 150px;
        }
    }
</style>