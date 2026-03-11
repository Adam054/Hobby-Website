<!--resort.php-->
<?php
// ─── DATABASE & FILTERING MUST COME FIRST ───────────────────────────────────
include 'Database/ski_db_connect.php';

$resort_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($resort_id <= 0) {
    header("Location: browse.php");
    exit;
}

$sql = "SELECT * FROM resorts WHERE id = $resort_id LIMIT 1";
$result = mysqli_query($conn, $sql);
$resort = mysqli_fetch_assoc($result);

if (!$resort) {
    header("Location: browse.php");
    exit;
}

$Rsql = "SELECT * FROM resort_details WHERE resort_id = $resort_id LIMIT 1";
$ResResult = mysqli_query($conn, $Rsql);
$details = mysqli_fetch_assoc($ResResult);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($resort['resort_name']) ?> — Ski Resorts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/GStyles.css">
    <link rel="stylesheet" href="css/Resort.css">
    <link rel="icon" type="image/png" href="Assets/hm.png">

    <style>
        /* ── Full-viewport hero with faded background image ── */
        .resort-hero {
            background-image: url('<?= htmlspecialchars($resort['image_url']) ?>');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            position: relative;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Ski Resorts</a>

        <a href="Browse.php" class="btn btn-secondary btn-sm px-4" id="RTB">
            <i class="bi bi-arrow-left me-1"></i> Return to Browse
        </a>
    </div>
</nav>

<!-- Scroll-to-Top Button -->
<button id="scrollToTopBtn"
        class="btn btn-primary rounded-circle shadow-lg position-fixed bottom-0 end-0 m-4 d-none"
        style="width:50px; height:50px; z-index:1000; font-size:1.5rem;"
        aria-label="Scroll back to top">
    <i class="bi bi-arrow-up"></i>
</button>

<!-- HERO  -->
<div class="resort-hero">
    <div class="resort-hero-overlay">

        <!-- Title centred vertically and horizontally -->
        <div class="resort-title">
            <h1><?= htmlspecialchars($resort['resort_name']) ?></h1>
            <p>
                <?= htmlspecialchars($resort['country']) ?>
                &nbsp;•&nbsp;
                Explore epic slopes and unforgettable mountain experiences
            </p>
        </div>

        <!-- Cards far left and far right -->
        <div class="resort-cards">

            <!-- (Leftside) resorts table -->
            <div class="resort-card card-left">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-info-circle me-2"></i>Resort Overview
                    </h5>
                    <p><strong>Country:</strong> <?= htmlspecialchars($resort['country']) ?></p>
                    <p><strong>Elevation:</strong> <?= number_format($resort['elevation_m']) ?> m</p>
                    <p><strong>Piste:</strong> <?= number_format($resort['piste_km']) ?> km</p>
                    <p><strong>Avg Snowfall:</strong> <?= number_format($resort['avg_snowfall_cm']) ?> cm</p>
                    <hr>
                    <p><?= htmlspecialchars($resort['description']) ?></p>
                </div>
            </div>

            <!-- (rightside) resort_details table -->
            <div class="resort-card card-right">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-card-checklist me-2"></i>Resort Details
                    </h5>
                    <?php if ($details): ?>
                        <p><strong>Season:</strong> <?= htmlspecialchars($details['ski_season']) ?></p>
                        <p><strong>Nearest Airport:</strong> <?= htmlspecialchars($details['nearest_airport']) ?></p>
                        <p><strong>Lifts:</strong> <?= $details['lift_count'] ?></p>
                        <p><strong>Runs:</strong> <?= $details['run_count'] ?></p>
                        <p><strong>Difficulty:</strong> <?= htmlspecialchars($details['difficulty_rating']) ?></p>
                        <hr>

                        <!-- Feature badges — always visible, green = yes, faded red = no -->
                        <div class="mt-2">

                            <span class="availability-badge <?= $details['night_skiing'] ? 'badge-yes' : 'badge-no' ?>">
                                <span class="badge-dot"></span>
                                🌙 Night Skiing
                            </span>

                            <span class="availability-badge <?= $details['ski_school'] ? 'badge-yes' : 'badge-no' ?>">
                                <span class="badge-dot"></span>
                                🎿 Ski School
                            </span>

                            <span class="availability-badge <?= $details['terrain_park'] ? 'badge-yes' : 'badge-no' ?>">
                                <span class="badge-dot"></span>
                                🏂 Terrain Park
                            </span>

                        </div>
                    <?php else: ?>
                        <p style="color: rgba(255,255,255,0.4)">No extra details available yet.</p>
                    <?php endif; ?>
                </div>
            </div>

        </div><!-- end cards row -->
    </div><!-- end overlay -->
</div><!-- end hero -->

<!-- Last Updated -->
<div class="text-center mt-4 mb-2">
    <p class="text-secondary">
        Last Updated • <?php echo date("d F Y", strtotime("2026-03-11")); ?>
    </p>
</div>

<!-- Footer -->
<?php include 'Footer/GlobalFooter.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="js/ScrollToTop.js"></script>
<script src="js/Animations.js"></script>

</body>
</html>