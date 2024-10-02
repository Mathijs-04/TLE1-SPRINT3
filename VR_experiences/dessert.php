<?php
$experience = [
    "experience" => "Dessert",
    "image" => "./images/dessert.webp",
    "information" => "Dompel jezelf onder in een woestijnlandschap zoals je dat nog nooit hebt gezien. De eindeloze horizon, gloeiende zandduinen die in de verte opdoemen en de vurige zon die langzaam achter de heuvels zakt, zorgen voor een indrukwekkend schouwspel. Je voelt de warmte van het zand onder je voeten en de stilte die je omringt, alleen doorbroken door de zachte bries die over de vlaktes waait. Deze ervaring laat je de kracht en schoonheid van de woestijn voelen zonder dat je een stap in de echte woestijn hoeft te zetten.",
    "expurl" => "./dessert.html"
];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VR Experience - <?php echo $experience['experience']; ?></title>
    <link href="../css/style_exp.css" rel="stylesheet">
</head>
<body>
<!-- Nav-bar -->
<nav>
    <a href="../index.php">
        <img src="../img/expcorp.webp" alt="logo" class="navlogo">
    </a>
    <div class="navlinkera">
        <a href="../index.php" class="navlinks">Home</a>
        <a href="../experiences.php" class="navlinks">Ervaring</a>
        <a href="../aboutus.php" class="navlinks">Over Ons</a>
        <a href="../product.php" class="navlinks">Product</a>
    </div>
</nav>

<!-- Main content -->
<div class="container">
    <h1><?php echo $experience['experience']; ?> Experience</h1>
    <img src="<?php echo $experience['image']; ?>" alt="<?php echo $experience['experience']; ?> Image">
    <p><?php echo $experience['information']; ?></p>

    <div class="demo-button">
        <a href="<?php echo $experience['expurl']; ?>">Bekijk Demo</a>
    </div>
</div>

<!-- Footer -->
<footer>
    <div>
        <img class="footerImg" src="../img/expcorpwhite.webp" alt="footerLogo">
        <div class="copyright">
            <p>© EXPCORP 2024</p>
        </div>
    </div>
    <div class="footerContent">
        <div class="legals">
            <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">Privacyverklaring</a>
            <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">Algemene voorwaarden</a>
            <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">Cookiebeleid</a>
            <a href="../contact.php">Contact</a>
        </div>
    </div>
</footer>

</body>
</html>
