<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <!-- Meta tags for charset and responsive viewport -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Page title -->
  <title>Browse Ski Resorts</title>
  
  <!-- Bootstrap 5.3.3 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
  
  <!-- Bootstrap Icons CDN (for arrow-up icon in scroll button) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <!-- Custom dark theme styles -->
  <style>
    body {
      background-color: #0d1117;     /* the dark background */
      color: #e6edf3;                /* the lighter text for contrast */
    }
    .card {
      background-color: #161b22;     /* Dark card background */
      border-color: #30363d;         /* Subtle border */
      transition: transform 0.15s, box-shadow 0.15s;
    }
    .card:hover {
      transform: translateY(-4px);   /* Lift effect on hover */
      box-shadow: 0 10px 20px rgba(0,0,0,0.4);
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;             /* Ensures images fill space nicely */
    }
    footer {
      background-color: #010409;     /* Almost black footer */
    }
  </style>
</head>

<body>

  <!-- Navigation Bar -->
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="browse.php">Browse Resorts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Floating Scoll to top Button -->
  <!-- Hidden by default (d-none), shown via JS when passed 300 pixels (veritcal) -->
  <button id="scrollToTopBtn" 
        class="btn btn-primary rounded-circle shadow-lg position-fixed bottom-0 end-0 m-4 d-none"
        style="width: 50px; height: 50px; z-index: 1000; font-size: 1.5rem;"
        aria-label="Back to top">
  <i class="bi bi-arrow-up"></i>
</button>

  <!-- Main Content Container -->
  <div class="container my-5">

    <!-- Page Heading -->
    <h1 class="text-center mb-5">All Ski Resorts</h1>

    <!-- Filter Controls -->
    <div class="row justify-content-center mb-5">
      <div class="col-md-6 col-lg-4">
        <label for="ResortFilter" class="form-label text-center d-block">
          Filter by Country/Favourites or Snowfall
        </label>
        <select id="ResortFilter" class="form-select">
          <option value="">All Resorts</option>
 <!-- Country ;| -->
          <optgroup label="By Country">
          <option value="c-Austria">Austria</option>
          <option value="c-Canada">Canada</option>
          <option value="c-France">France</option>
          <option value="c-Japan">Japan</option>
          <option value="c-Switzerland">Switzerland</option>
          <option value="c-USA">USA</option>
  </optgroup>
<!-- Snowfall :/ -->
  <optgroup label="By Snowfall">
    <option value="s-high">High Snowfall (>800 cm)</option>
    <option value="s-med">Medium Snowfall (400-800 cm)</option>
    <option vlaue="s-low">Low Snowfall (< 400) cm </option> <!-- Space must remain otherwise break! -->
  </optgroup>
<!-- Favourites :)  -->
  <optgroup label="Favourites">
    <option value="author-fav">Author's Favourite</option>
  </optgroup>
        </select>
      </div>
    </div>

    <!-- PHP Fetch and Display Resorts from Database -->
    <?php
    // SQL query: get all resorts, sorted alphabetically by name
    $sql = "SELECT * FROM resorts ORDER BY resort_name ASC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0):
    ?>
      <!-- Responsive Bootstrap grid: 1 col mobile | 2 tablet | 3 desktop -->
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="col">
            <div class="card h-100 shadow">
              <!-- Resort Image -->
              <?php if (!empty($row['image_url'])): ?>
                <img src="<?= htmlspecialchars($row['image_url']) ?>" 
                    class="card-img-top" 
                    alt="Ski resort: <?= htmlspecialchars($row['resort_name']) ?>">
              <?php else: ?>
                <div class="card-img-top bg-dark d-flex align-items-center justify-content-center" 
                    style="height:200px;">
                  <span class="text-muted">No image available</span>
                </div>
              <?php endif; ?>

              <!-- Card Content -->
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($row['resort_name']) ?></h5>
                <p class="card-text text-secondary mb-1">
                  <strong>Country:</strong> <?= htmlspecialchars($row['country']) ?>
                </p>
                <p class="card-text text-secondary mb-1">
                  <strong>Elevation:</strong> <?= number_format($row['elevation_m']) ?> m
                </p>
                <p class="card-text text-secondary mb-1">
                  <strong>Piste:</strong> <?= number_format($row['piste_km']) ?> km
                </p>
                <p class="card-text text-secondary mb-2">
                  <strong>Avg Snowfall:</strong> <?= number_format($row['avg_snowfall_cm']) ?> cm
                </p>
                <p class="card-text"><?= htmlspecialchars($row['description']) ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <!-- Fallback message if no data -->
      <div class="alert alert-info text-center">
        No resorts found in the database.
      </div>
    <?php endif;

    // Close database connection (good practice)
    mysqli_close($conn);
    ?>

  </div> <!-- End of .container -->

  <!-- Footer -->
  <footer class="py-4 text-center text-secondary border-top border-secondary">
    <div class="container">
      <p class="mb-0">Haydn Maguire © <?php echo date("Y"); ?></p>
    </div>
  </footer>

  <!-- Bootstrap JS (includes Popper for tooltips, dropdowns, etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
          crossorigin="anonymous"></script>

  <!-- Custom JavaScript files (external for better organisation) -->
  <!-- Filter.js handles country + favourites filtering -->
  <script src="js/Filter.js"></script>
  
  <!-- ScrollToTop.js handles the floating scroll button -->
  <script src="js/ScrollToTop.js"></script>

</body>
</html>