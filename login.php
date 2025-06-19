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
  <title>Login</title>
  <link rel="stylesheet" href="./assets/css/maicons.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="./assets/css/theme.css">
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>
  <div class="back-to-top"></div>

  <header>
    <div class="header-container">
      <div class="logo-container">
        <img src="./assets/img/logo.jpg" class="logo" alt="Logo">
      </div>
      <h1>Login</h1>
    </div>
    <nav class="navbar navbar-expand-lg shadow-sm">
      <div class="container">
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
      <div class="login-card">
        <div class="card-header">
          <i class="fas fa-user"></i>
          <h1>Login Here</h1>
        </div>
        <form action="logincode.php" method="POST" class="main-form">
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
          </div>
          <button type="submit" name="login_btn" class="btn-login">Login</button>
        </form>
      </div>
    </div>
  </div>
  <footer>
    <p>© 2025 Hail University. All Rights Reserved.</p>
  </footer>
  <script src="./assets/js/jquery-3.5.1.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/owl.carousel.min.js"></script>
  <script src="./assets/js/wow.min.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>