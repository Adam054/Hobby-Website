<!--index.php-->
<?php
// include 'Database/ski_db_connect.php';  // Uncomment only if adding DB data
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<!-- Styles Sheet -->
<link rel="stylesheet" href="css/indstyle.css"> <!--Need to get .hero css-->
<link rel="stylesheet" href="css/GStyles.css">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>World Resort Map</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!--Bootstrap Icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Styles Sheet -->
<link rel="stylesheet" href="css/GStyles.css">
<link rel="icon" type="image/png" href="Assets/hm.png">  <!-- image/x-icon for .ico files -->
</head>
<body>

<!-- Navigation Bar - consistent across site -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary">
    <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">Ski Resorts</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="Browse.php" id="btb" class="btn btn-secondary btn-sm px-5"> <!--Back to Browse-->
        <span class="btn-text">Back to Browse?</span>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="browse.php">Browse Resorts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ResortMap.php">Resort Map</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Scroll-to-Top Button -->
  <!-- Hidden by default (d-none), shown via JS when user scrolls down -->
  <button id="scrollToTopBtn"
          class="btn btn-primary rounded-circle shadow-lg position-fixed bottom-0 end-0 m-4 d-none"
          style="width: 50px; height: 50px; z-index: 1000; font-size: 1.5rem;"
          aria-label="Scroll back to top of page">
    <i class="bi bi-arrow-up"></i>
  </button>

  <!-- Hero Section, Introduction to the website. -->
  <div class="hero">
    <div class="container">
        <h1 class="display-4 fw-bold text-white mb-3">Discover more about [resort_name]!</h1>
        <p class="lead text-white-75 mb-4">Explore epic slopes, deep powder, and unforgettable mountain experiences</p>
    </div>
  </div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <div class="grid">
        <div class="card"> <!--To be named ResortCard/~ -->
            <h3>ResortName</h3>
            <p><strong>--</strong></p>
            <p><strong>--</strong></p>
            <p><strong>--</strong></p>
            <p><strong>--</strong></p>
        </div>
    </div>
</div>


    <!-- technical note -->
    <div class="text-center mt-5">
      <p class="text-secondary">
        Last Updated • <?php echo date("d F Y", strtotime("2026-02-17")); ?>
      </p>
    </div>
  </div>

    <!-- Footer -->
  <?php include 'Footer/GlobalFooter.php' ?> <!-- Footer Optimised to use a single file for the entire site -->

  <!-- Bootstrap JS (includes Popper for tooltips, dropdowns (CSS)) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
      crossorigin="anonymous"></script>

  <!-- external JS files -->
  <!-- ScrollToTop.js shows/hides and handles the floating arrow button -->
  <script src="js/ScrollToTop.js"></script>
<script src="js/Animations.js"></script>
</body>
</html>