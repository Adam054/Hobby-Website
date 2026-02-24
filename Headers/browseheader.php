<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <!-- Meta tags for charset and responsive viewport -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Page title -->
  <title>Browse Ski Resorts</title>
  <!-- Favicon (ICON) -->
  <link rel="icon" type="image/png" href="logo/hm.png">  <!-- image/x-icon for .ico files -->

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