<?php
include('./config/dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>Events</title>
    <link rel="stylesheet" href="./assets/css/maicons.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="./assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/blog.css">

</head>
<body>
    <div class="back-to-top"></div>

    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="./assets/img/logo.jpg" class="logo" alt="Logo">
            </div>
            <h1>Events</h1>
        </div>
        <nav class="navbar">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item active"><a class="nav-link" href="vaccines.php">Vaccine Info</a></li>
        <li class="nav-item"><a class="nav-link" href="blog.php">Events</a></li>
        <li class="nav-item">
          <a class="btn btn-primary ml-lg-3" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary ml-lg-3" href="register.php">Register</a>
        </li>
      </ul>
    </div>
  </nav>
    </header>

    <div class="page-section bg-light">
        <div class="container">
            <div class="wrapper">
                <?php
                $query = "SELECT * FROM event";
                $query_run = mysqli_query($con, $query);
                $event_count = mysqli_num_rows($query_run);
                if ($event_count > 0) {
                ?>
                    <div class="inner" style="--quantity: <?php echo $event_count; ?>;">
                        <?php
                        $index = 0;
                        while ($row = mysqli_fetch_assoc($query_run)) {
                            $orgdate = $row['dateofevent'];
                            $date = strtotime($orgdate);
                            $newdate = date("F d, Y", $date);
                            $time = $row['event_time'];
                        ?>
                            <div class="card" style="--index: <?php echo $index; ?>;">
                                <div class="card-content">
                                    <h3><?php echo "<b>" . $row['event_name'] . "</b>"; ?></h3>
                                    <p><?php echo $row['event_info']; ?></p>
                                    <div class="date">
                                        <i class="fas fa-calendar-alt"></i>
                                        <?php echo "<b>" . $newdate . " " . $time . "</b>"; ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $index++;
                        }
                        ?>
                    </div>
                <?php
                } else {
                    echo "<p>No events found.</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2025 Hail University. All Rights Reserved.</p>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>
</html>