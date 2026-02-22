<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <!-- Meta tags for proper encoding and mobile responsiveness -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Page title -->
  <title>My Ski Resorts – Home</title>
  
  <!-- Favicon (ICON) -->                   <!--   Reminder: If I want to switch back to Icons:  -->
  <link rel="icon" type="image/png" href="logo/hm.png"> <!-- image/x-icon for .ico files -->

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