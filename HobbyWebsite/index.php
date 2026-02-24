<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Favourite Ski Resorts</title>
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
        <section class="intro">
            <h2>Welcome to my ski website!</h2>
            <p>This is a simple read-only web application I created for my Web Technologies assignment.</p>
            <p>I love skiing. This site shows 10 of my favourite ski resorts from around the world — each one pulled straight from a MySQL database using PHP.</p>
            <p>Go to the <a href="browse.php">Browse Resorts</a> page to see the full list with names, countries, elevation, piste length, average snowfall, and short descriptions.</p>

            <h3>Technologies I used</h3>
            <ul>
                <li>HTML5 + CSS3 (with basic responsive grid)</li>
                <li>A tiny bit of JavaScript (just for console log / future fun)</li>
                <li>PHP + MySQL (to read data from the database)</li>
            </ul>

            <p>All images come from Wikimedia Commons or similar free sources — no copyright issues.</p>
        </section>
    </main>

    <footer>
        <p>Web Technologies & Applications – Assignment 1 • <?php echo date("Y"); ?></p>
    </footer>

</body>
</html>