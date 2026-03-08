<!--index.php-->
<?php
// include 'Database/ski_db_connect.php';  // Uncomment only if adding DB data
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<!-- Index Specific Header -->
<?php include 'Headers/indexheader.php'; ?>

<!-- Styles Sheet -->
<link rel="stylesheet" href="css/indstyle.css">
<link rel="stylesheet" href="css/GStyles.css">

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
      <h1 class="display-4 fw-bold text-white mb-3">Discover the World's Best Ski Resorts</h1>
      <p class="lead text-white-75 mb-4">Explore epic slopes, deep powder, and unforgettable mountain experiences</p>
      
      <div class="btn-wrapper">
        <a href="browse.php" id="btnBrowse" class="btn btn-primary btn-lg px-5">
          <span class="btn-text">Browse Resorts</span>
        </a>
        <div class="bashercontainer">
          <img src="Assets/svg/piestbasherhm.svg" class="basher-anim" alt="piest-basher" width="34" height="34">
        </div>
      </div>

      <div class="btn-wrapper">
        <a href="ResortMap.php" id="btnMap" class="btn btn-primary btn-lg px-5">
        <span class="btn-text">Resort Map</span>
        </a>
        <img src="Assets/svg/plane.svg" class="plane-anim" alt="plane" width="28" height="28">
      </div>
    </div>
  </div>

  <!-- Task 1, 01 - Landing page -->
  <!-- This is the "explain the landing" part of the assignment.  -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card shadow border-secondary">
          <div class="card-body p-5">
            <h2 class="card-title text-center mb-4">About This Site</h2>
            <p class="lead text-center mb-4">
              Welcome! This is my personal read-only hobby website about <strong>ski resorts around the world</strong>.
            </p>
            <p>
              I created this as part of my <strong>Web Technologies & Applications Assignment</strong>. 
              The project was to build a simple, responsive web app that lets visitors explore a collection 
              of 10 ski resorts from a real MySQL database, all without any user input or editing.
            </p>
            <p>Key features:</p>
            <ul class="list-group list-group-flush mb-4">

              <li class="list-group-item bg-dark text-light border-secondary">
                <strong>Home page</strong>: Introduces the site and my skiing hobby.
                Features two animated hero buttons, a piste basher that drives across and
                pushes the text away, and a plane that flies across the button. Both Activated on Hover.
              </li>

              <li class="list-group-item bg-dark text-light border-secondary">
                <strong>Browse page</strong>: Displays 10 ski resorts pulled dynamically
                from a MySQL database using PHP and XAMPP. Supports filtering by Country,
                Snowfall, Elevation, and Author's Favourite, with a dynamic page heading
                that updates to match the active filter.
              </li>

              <li class="list-group-item bg-dark text-light border-secondary">
                <strong>Resort Map page</strong>: An interactive image map letting users
                click a country region to load filtered resorts inside an iframe. Hovering
                over a country pin triggers a green glow effect on the map, solved using a
                JavaScript <code>forceMapHover()</code> function to work around a CSS
                limitation with <code>&lt;area&gt;</code> tags.
              </li>

              <li class="list-group-item bg-dark text-light border-secondary">
                <strong>Responsive design</strong>: Built with Bootstrap 5.3.3, scaling
                cleanly across phones, tablets, and desktops. Card layouts shift from 1 to
                2 to 3 columns depending on screen width.
              </li>

              <li class="list-group-item bg-dark text-light border-secondary">
                <strong>Client-side extras</strong>: Vanilla JavaScript powers the filter
                system, scroll-to-top button, hero button animations, and the map iframe
                loader. Animation timers use <code>clearTimeout</code> to handle rapid
                hover events cleanly.
              </li>

            </ul>
            <p class="text-center text-secondary">
              Technologies used: HTML5, CSS3, Bootstrap 5, PHP, MySQL, vanilla JavaScript.<br>
              All content is read-only - no login or forms.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Quick Info Cards Section -->
  <div class="container my-5">
    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <div class="card-body">
            <h5 class="card-title">Best Snow?</h5>
            <p class="card-text text-secondary">
              Experience legendary deep powder in Japan, Canada, and the Alps.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <div class="card-body">
            <h5 class="card-title">Highest Altitude?</h5>
            <p class="card-text text-secondary">
              Ski above 3000 m with breathtaking views and reliable snow.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <div class="card-body">
            <h5 class="card-title">Pinnacle of Varied Terrain?</h5>
            <p class="card-text text-secondary">
              From beginner friendly blues to expert pistes (Black runs) and off-piste skiing available.
            </p>
          </div>
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