<?php
session_start();
include('./config/dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vaccine Information Hub</title>

  <!-- External Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/css/vacinfo.css">


</head>

<body>

  <!-- Back to Top Button -->
  <div class="back-to-top"><i class="fas fa-arrow-up"></i></div>

  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="logo-container">
        <img src="./assets/img/logo.jpg" class="logo" alt="Logo">
        <h1>Vaccine Hub</h1>
      </div>
    </div>
  </header>

  <!-- Navbar -->
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

  <!-- Vaccine Information Section -->
  <section class="content-section">
    <!-- Row 1 -->
    <div class="vaccine-card">
      <img src="./assets/img/BCG-hero-1.jpg" alt="BCG Vaccine">
      <div class="card-content">
        <h2>BCG</h2>
        <p>Vaccine for TB, given at 28 days. Single dose for lifetime immunity.</p>
        <button class="btn-details" data-toggle="modal" data-target="#bcgModal">Details</button>
      </div>
    </div>

    <div class="vaccine-card">
      <img src="./assets/img/pentavalent-vaccine-03222024jb.jpg" alt="Pentavalent Vaccine">
      <div class="card-content">
        <h2>Pentavalent</h2>
        <p>5-in-1 vaccine, 3 doses at 6, 10, 14 weeks.</p>
        <button class="btn-details" data-toggle="modal" data-target="#pentavalentModal">Details</button>
      </div>
    </div>

    <div class="vaccine-card">
      <img src="./assets/img/100019.webp" alt="PCV Vaccine">
      <div class="card-content">
        <h2>PCV</h2>
        <p>Protects against pneumococcal disease, 4 doses.</p>
        <button class="btn-details" data-toggle="modal" data-target="#pcvModal">Details</button>
      </div>
    </div>

    <div class="vaccine-card">
      <img src="./assets/img/polio-afp670.jpg" alt="OPV Vaccine">
      <div class="card-content">
        <h2>OPV</h2>
        <p>Oral Polio Vaccine, doses at birth, 6, 10, 14 weeks.</p>
        <button class="btn-details" data-toggle="modal" data-target="#opvModal">Details</button>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="vaccine-card">
      <img src="./assets/img/Polio_angelp_GettyImages-1386859716.webp" alt="IPV Vaccine">
      <div class="card-content">
        <h2>IPV</h2>
        <p>Inactivated Polio Vaccine, 4 doses up to 6 years.</p>
        <button class="btn-details" data-toggle="modal" data-target="#ipvModal">Details</button>
      </div>
    </div>

    <div class="vaccine-card">
      <img src="./assets/img/vaccine-1.jpg" alt="MR Vaccine">
      <div class="card-content">
        <h2>MR</h2>
        <p>Measles-Rubella vaccine, single dose for ages 9 months–15 years.</p>
        <button class="btn-details" data-toggle="modal" data-target="#mrModal">Details</button>
      </div>
    </div>

    <div class="vaccine-card">
      <img src="./assets/img/1000_F_555921330_b5tZ7liTy87OAlq5zTQROQYQaCKLeYlb.jpg" alt="TT Vaccine">
      <div class="card-content">
        <h2>TT</h2>
        <p>Tetanus Toxoid, 5 doses plus boosters.</p>
        <button class="btn-details" data-toggle="modal" data-target="#ttModal">Details</button>
      </div>
    </div>

    <div class="vaccine-card">
      <img src="./assets/img/rotavirus-vaccine-vector-illustration_787461-3339.avif" alt="Rotarix Vaccine">
      <div class="card-content">
        <h2>Rotarix</h2>
        <p>Prevents Rotavirus diarrhea, 2–3 doses by 8 months.</p>
        <button class="btn-details" data-toggle="modal" data-target="#rotarixModal">Details</button>
      </div>
    </div>
  </section>

  <!-- Modals -->
  <div class="modal fade" id="bcgModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">BCG Vaccine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          BCG, or Bacille Calmette-Guerin, is a vaccine for Tuberculosis (TB) disease. It’s typically offered at about 28 days old. A single dose provides lifetime immunity, and booster doses are not recommended by WHO. It’s also used for high-risk individuals and to treat bladder tumors or cancer.
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="pentavalentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Pentavalent Vaccine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          A pentavalent vaccine, also known as a 5-in-1 vaccine, combines five vaccines into one. It protects against Diphtheria, Tetanus, Whooping Cough, Hepatitis B, and Haemophilus Influenzae type B. Three doses are administered at 6, 10, and 14 weeks of age.
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="pcvModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">PCV Vaccine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Pneumococcal Conjugate Vaccine protects against bacteria causing pneumococcal disease. Variants include PCV13, PCV15, and PCV20, recommended based on age and medical status. For infants, CDC advises a 4-dose series at 2, 4, 6, and 12–15 months.
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="opvModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">OPV Vaccine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Oral Polio Vaccine (OPV) produces antibodies against all three poliovirus types, preventing polio paralysis. Doses are given at birth, 6 weeks, 10 weeks, and 14 weeks. Administered orally with two drops from a multi-dose vial.
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ipvModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">IPV Vaccine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Inactivated Poliovirus Vaccine (IPV) contains formaldehyde-inactivated polioviruses (types 1, 2, and 3). Children typically receive doses at 2 months, 4 months, 6–18 months, and 4–6 years, sometimes in combination vaccines.
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="mrModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">MR Vaccine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          The Measles-Rubella (MR) campaign vaccinates children aged 9 months to under 15 years with one dose, regardless of prior immunization or infection. Mild side effects like pain, redness, or low-grade fever may occur but subside naturally.
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ttModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">TT Vaccine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Tetanus Toxoid (TT) prevents Tetanus. Five doses are recommended during childhood, with a sixth in adolescence. After three doses, immunity is established, but boosters every 10 years are advised.
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="rotarixModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Rotarix Vaccine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Rotarix prevents Rotavirus disease, causing severe diarrhea in young children. Administered orally, babies receive 2 or 3 doses (depending on the brand), with the first before 15 weeks and the last by 8 months.
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>© 2025 Hail University. All Rights Reserved.</p>
  </footer>

  <!-- Scripts -->
  <script src="./assets/js/jquery-3.5.1.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>