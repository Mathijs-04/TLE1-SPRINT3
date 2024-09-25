<?php
require_once 'includes/actions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/style.css" rel="stylesheet">
    <script src="./js/main.js"></script>
</head>
<body>

<nav>
    <img src="./img/expcorp.webp" alt="logo" class="navlogo">
    <div class="navlinkera">
        <a href="index.php" class="navlinks">Home</a>
        <a href="experiences.php" class="navlinks">Ervaring</a>
        <a href="aboutus.php" class="navlinks">Over Ons</a>
        <a href="Review.php" class="navlinks">Review</a>
    </div>
</nav>

<main>
    <?php
    $embedUrls = [
        1 => "https://momento360.com/e/u/fe738b62620345c4b63018a7c5f6869f?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true",
        2 => "https://momento360.com/e/u/740b1dc2dd9c440b8f05efe043731e5a?utm_campaign=embed&utm_source=other&heading=-155.45&pitch=-6.92&field-of-view=75&size=medium&display-plan=true",
        3 => "https://momento360.com/e/u/4eb188d8ada6469a9486aa7b5ac1d40a?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=55&size=medium&display-plan=true",
        4 => "https://momento360.com/e/u/91043e3f9f0e4c7295e8fedfec96931d?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true",
        5 => "https://momento360.com/e/u/020ef5f9082740f893180e36f0da94a7?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true",
        6 => "https://momento360.com/e/u/0441d0a47bc84fb5a6556c003b643836?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true",
        7 => "https://momento360.com/e/u/96b4eafd580543bc9ffe67b542d148a3?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true",
        8 => "https://momento360.com/e/u/191880e6b1a04013ba11fdc4ab6f6868?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true",
        9 => "https://momento360.com/e/u/96c82f7a3021470484d0dff00f34ed9b?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true"
    ];

    if (array_key_exists($id, $embedUrls)): ?>
        <div class='embed-container'>
            <iframe src="<?= $embedUrls[$id] ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    <?php else: ?>
        <p>No experience found for the given ID.</p>
    <?php endif; ?>
</main>

<footer>
    <div>
        <img class="footerImg" src="./img/expcorpwhite.webp" alt="footerLogo">
        <div class="copyright">
            <p>© EXPCORP 2024</p>
        </div>
    </div>
    <div class="footerContent">
        <div class="legals">
            <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">Privacyverklaring</a>
            <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">Algemene voorwaarden</a>
            <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">Cookiebeleid</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>
</footer>
</body>
</html>