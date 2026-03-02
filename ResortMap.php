<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Resort Map</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Styles Sheet -->
  <link rel="stylesheet" href="css/GStyles.css">
  <link rel="styleshet" href="css/RMap.css">
  <link rel="icon" type="image/png" href="logo/hm.png">  <!-- image/x-icon for .ico files -->

  <!-- Added: Basic styles for iframe and dynamic title -->
  <style>
    #resortsIframe {
      display: none;           /* Hidden until first click */
      width: 100%;
      height: 700px;           /* Adjust as needed */
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.5);
    }
    #iframeTitle {
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>

<!-- Navbar (unchanged) -->
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

  <div class="text-center mb-5">
    <img src="logo/Map.png" usemap="#resortmap" class="img-fluid shadow" alt="World ski resort map">

    <map name="resortmap">
      <!-- USA -->
      <area target="" alt="USA" title="USA" 
            href="#" 
            onclick="loadResorts('USA'); return false;" 
            coords="447,601,40" shape="circle">
      
      <!-- Canada -->
      <area target="" alt="Canada" title="Canada" 
            href="#" 
            onclick="loadResorts('Canada'); return false;" 
            coords="337,435,40" shape="circle">
      
      <!-- France -->
      <area target="" alt="France" title="France" 
            href="#" 
            onclick="loadResorts('France'); return false;" 
            coords="926,505,40" shape="circle">
      
      <!-- Switzerland -->
      <area target="" alt="Switzerland" title="Switzerland" 
            href="#" 
            onclick="loadResorts('Switzerland'); return false;" 
            coords="995,503,40" shape="circle">
      
      <!-- Austria -->
      <area target="" alt="Austria" title="Austria" 
            href="#" 
            onclick="loadResorts('Austria'); return false;" 
            coords="1051,503,40" shape="circle">
      
      <!-- Japan -->
      <area target="" alt="Japan" title="Japan" 
            href="#" 
            onclick="loadResorts('Japan'); return false;" 
            coords="1615,590,40" shape="circle">
    </map>
  </div>

  <!-- Iframe container for filtered resorts -->
  <div class="text-center">
    <h3 id="iframeTitle" class="mb-4">Select a country on the map</h3>
    <iframe id="resortsIframe" 
            src="about:blank" 
            width="100%" 
            height="700" 
            frameborder="0" 
            class="border shadow rounded"
            title="Filtered resorts list">
      <!-- Fallback content if iframe not supported -->
      <p>Your browser does not support iframes. <a href="browse.php">View all resorts</a></p>
    </iframe>
  </div>

  <p class="text-center mt-4 text-secondary">
    Map regions are approximate - click to explore resorts by country/region.
  </p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<!-- Image map resizer (Allows functionality on phones and tablets)-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script>
<script>imageMapResize();</script>

<!-- Script to update Iframe -->
<script>
function loadResorts(country)
{
    const iframe = document.getElementById('resortsIframe');
    const title = document.getElementById('iframeTitle');
    
    iframe.style.display = 'block';
    title.textContent = "Resorts in " + country + "!";
    
    iframe.src = "browse.php?country=" + encodeURIComponent(country);
    
    iframe.scrollIntoView({ behavior: 'smooth' });
}</script>
<!-- Scroll to Top script -->
<script> src="js/ScrollToTop.js" </script>

<?php include_once 'Footer/GlobalFooter.php' ?>
</body>
</html>