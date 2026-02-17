<?php
// include 'db_connect.php';  // Uncomment only if adding DB data
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <!-- Meta tags for proper encoding and mobile responsiveness -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Page title -->
  <title>My Ski Resorts – Home</title>
  
  <!-- Favicon (ICON) -->
  <link rel="icon" type="image/x-icon" href="logo/hm.ico">

  <!-- Bootstrap 5.3.3 CSS CDN for layout, components, and dark theme support -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
  
  <!-- Bootstrap Icons for arrow-up in scroll button -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <!-- Custom dark theme overrides (Soon to be optimised) --> 
  <style>
    body {
      background-color: #0d1117;     /* Deep dark background for moody ski vibe */
      color: #e6edf3;                /* Light text for readability */
    }
    .hero {
      /* Hero with dark overlay on snowy mountain background */
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)), 
      url('https://images.unsplash.com/photo-1551524559-8af2414e4b28?auto=format&fit=crop&q=80') 
      center/cover no-repeat;
      min-height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .card {
      background-color: #161b22;     /* Matching dark card background */
      border-color: #30363d;
    }
    footer {
      background-color: #010409;     /* Near-black footer */
    }
  </style>
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
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="browse.php">Browse Resorts</a>
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
      <a href="browse.php" class="btn btn-primary btn-lg px-5">Browse Resorts</a>
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
              I created this as part of my <strong>Web Technologies & Applications Assignment 1</strong>. 
              The project was to build a simple, responsive web app that lets visitors explore a collection 
              of 10 items in this case ski resorts, from a real database that i made — all without any user input or editing.
            </p>
            <p>
              Key features:
            </p>
            <ul class="list-group list-group-flush mb-4">
              <li class="list-group-item bg-dark text-light border-secondary">
                <strong>Home page</strong> — This page introduces the site, and my project of making a Hobby Website, The Hobby is skiing.
              </li>
              <li class="list-group-item bg-dark text-light border-secondary">
                <strong>Browse page</strong> — displays 10+ ski resorts pulled dynamically from a MySQL database using PHP (Ultimately XAMPP)
              </li>
              <li class="list-group-item bg-dark text-light border-secondary">
                <strong>Responsive design</strong> — This website used Bootstrap 5.3.3, This allows the site to be scaled for Phones, Tablets and Desktop.
              </li>
              <li class="list-group-item bg-dark text-light border-secondary">
                <strong>Client-side extras</strong> — I used Vanilla Javascript for Filtering by Country, Favourites or Snowfall and for the return-to-top button
              </li>
            </ul>
            <p class="text-center text-secondary">
              Technologies used: HTML5, CSS3, Bootstrap 5, PHP, MySQL, vanilla JavaScript.<br>
              All content is read-only — no login, no forms, just exploration.
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
  <footer class="py-4 text-center text-secondary border-top border-secondary">
    <div class="container">
      <p class="mb-0">Haydn Maguire © <?php echo date("Y"); ?></p>
    </div>
  </footer>

  <!-- Bootstrap JS bundle (includes Popper for dropdowns, etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
          crossorigin="anonymous"></script>

  <!-- external JS files -->
  <!-- ScrollToTop.js shows/hides and handles the floating arrow button -->
  <script src="js/ScrollToTop.js"></script>

</body>
</html>