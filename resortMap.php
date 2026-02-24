<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Resort Map</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Styles Sheet -->
<link rel="stylesheet" href="css/GStyles.css">
<link rel="icon" type="image/png" href="logo/hm.png">  <!-- image/x-icon for .ico files -->
<body>
<!--  Navbar  -->
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
                <a class="nav-link" href="browse.php">Browse Resorts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="resortMap.php">Resort Map</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container my-5">
    <h1 class="text-center mb-4">World Resort Map</h1>
    <p class="lead text-center mb-5">Click a region to see resorts there</p>

    <div class="text-center">
      <img src="https://tse2.mm.bing.net/th/id/OIP.MkWbk30KFN87YbpQGeZI6wHaFS?pid=Api"
           usemap="#worldmap" 
           class="img-fluid shadow" 
           alt="Clickable world map of ski regions" 
           style="max-height: 600px;">

           <map name="worldmap">
        <!-- Canada (rough area) -->
        <area shape="poly" coords="150,100,200,120,220,180,180,220,140,200" 
              href="browse.php?country=Canada" 
              alt="Canada" title="View Canadian resorts">

        <!-- Japan -->
        <area shape="poly" coords="480,180,520,200,510,240,470,230" 
              href="browse.php?country=Japan" 
              alt="Japan" title="View Japanese resorts">

        <!-- Europe/Alps (rough) -->
        <area shape="poly" coords="320,140,380,160,400,200,340,220" 
              href="browse.php?country=Europe" 
              alt="Europe/Alps" title="View European resorts">

        <!-- USA -->
        <area shape="poly" coords="100,160,140,180,160,240,120,260" 
              href="browse.php?country=USA" 
              alt="USA" title="View USA resorts">
    </div>

    <p class="text-center mt-4 text-secondary">
      Map regions are approximate – click to explore resorts by country/region.
    </p>
</div>

<!-- Bootstrap JS (includes Popper for tooltips, dropdowns (CSS)) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>

<?php include 'Footer/GlobalFooter.php' ?>
</body>
</html>