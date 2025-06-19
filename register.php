<?php
session_start();
include('message.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/maicons.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
 
</head>

<body>
    <div class="back-to-top"></div>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="./assets/img/logo.jpg" class="logo" alt="Logo">
            </div>
            <h1>Register</h1>
        </div>
        <nav class="navbar navbar-expand-lg shadow-sm">
            <div class="container">
                <form action="#">
                    <div class="input-group input-navbar"></div>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="vaccines.php">Vaccine Info</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.php">Events</a></li>
                        <li class="nav-item"><a class="btn btn-primary ml-lg-3" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="btn btn-primary" href="register.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="night-mode-switch" onclick="toggleNightMode()">
        <i class="fas fa-moon"></i>
    </div>

    <h3 class="message">
        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
    </h3>

    <div class="page-section">
        <div class="container">
            <div class="registration-card">
                <div class="card-header">
                    <i class="fas fa-user-plus"></i>
                    <h1>Register Here</h1>
                </div>
                <div class="card-body">
                    <form class="main-form" action="registercode.php" method="POST">
                        <div class="form-grid">
                            <div class="form-group">
                                <input required type="text" name="fname" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ffname" class="form-control" placeholder="Enter Father's First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="flname" class="form-control" placeholder="Enter Father's Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="fnid" class="form-control" placeholder="Enter Father's NID">
                            </div>
                            <div class="form-group">
                                <select name="division" class="custom-select">
                                    <option value="" disabled selected hidden>Please Choose Division</option>
                                    <option value="Chattogram">Chattogram</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Kumilla">Kumilla</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Rongpur">Rongpur</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Khulna">Khulna</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <select name="gender" class="custom-select">
                                    <option value="" disabled selected hidden>Please Choose Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" name="dob" class="form-control" placeholder="Enter Date of Birth">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="rpassword" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>
                        <button type="submit" name="register_btn" class="btn-submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2025 Hail University. All Rights Reserved.</p>
    </footer>
    <script>
        function toggleNightMode() {
            document.body.classList.toggle('night-mode');
        }
    </script>
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="./assets/vendor/wow/wow.min.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>

</html>