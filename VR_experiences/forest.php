<?php
$experience = [
    "experience" => "Forest",
    "image" => "./images/forest.webp",
    "information" => "Stel je voor: je zet een stap in een levendig, groen bos, omringd door torenhoge bomen en het zachte gefluister van de wind door de bladeren. Overal om je heen hoor je vogels zingen, terwijl zonnestralen door de bomen breken en het pad voor je verlichten. Deze VR-ervaring brengt je naar een serene wereld vol natuur. Ontspan terwijl je langs kabbelende beekjes loopt, adem de frisse lucht in, en ervaar het gevoel van totale rust, weg van de drukte van het dagelijks leven.",
    "expurl" => "./forest.html"
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
