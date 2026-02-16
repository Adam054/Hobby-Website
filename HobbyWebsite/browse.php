<?php 
include 'db_connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Ski Resorts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>My Favourite Ski Resorts</h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="browse.php">Browse Resorts</a>
        </nav>
    </header>

    <main>
        <h2>Top 10 Ski Resorts</h2>

        <?php
        $sql = "SELECT * FROM resorts ORDER BY resort_name ASC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<div class='grid'>";
            
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card'>";
                echo "<h3>" . htmlspecialchars($row["resort_name"]) . "</h3>";
                echo "<p><strong>Country:</strong> " . htmlspecialchars($row["country"]) . "</p>";
                echo "<p><strong>Elevation:</strong> " . number_format($row["elevation_m"]) . " m</p>";
                echo "<p><strong>Piste:</strong> " . number_format($row["piste_km"]) . " km</p>";
                echo "<p><strong>Avg Snowfall:</strong> " . number_format($row["avg_snowfall_cm"]) . " cm/year</p>";
                echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
                
                if (!empty($row["image_url"])) {
                    echo "<img src='" . htmlspecialchars($row["image_url"]) . "' alt='" . htmlspecialchars($row["resort_name"]) . " ski resort' loading='lazy'>";
                }
                
                echo "</div>";
            }
            
            echo "</div>";
        } else {
            echo "<p>Sorry — no resorts found in the database.</p>";
        }

        mysqli_close($conn);
        ?>
    </main>

    <footer>
        <p>Web Technologies & Applications – Assignment 1 • <?php echo date("Y"); ?></p>
    </footer>

</body>
</html>