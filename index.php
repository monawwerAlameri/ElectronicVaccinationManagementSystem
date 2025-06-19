<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaccination Management System</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="./assets/img/logo.jpg" class="logo" alt="Vaccination Logo">
            </div>
            <h1>Vaccination Management System</h1>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vaccines.php">Vaccine Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <section class="content-section">
        <img src="./assets/img/home.jpg" alt="Vaccination System">
        <div class="description">
            <h2>Welcome to Your Vaccination Hub</h2>
            <p>
                Discover a seamless way to manage vaccinations with our cutting-edge system. Designed to save time, keep you updated, and ensure top-tier care, we streamline records, schedules, and patient data effortlessly.
            </p>
            <a href="vaccines.php" class="btn-explore">Explore Now</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 Hail University - All Rights Reserved</p>

    </footer>

    <!-- Scripts -->
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scroll for back-to-top button
        $(document).ready(function() {
            $('.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>
</body>

</html>