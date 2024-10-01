<?php
include 'database/db_connection.php';

/** @var mysqli $db */

$sql = "SELECT id, name, image_link FROM experience";
$result = $db->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/style.css" rel="stylesheet">
    <script src="./js/main.js"></script>
    <title>Experiences</title>
</head>
<body>
<nav>
    <a href="index.php">
        <img src="./img/expcorp.webp" alt="logo" class="navlogo">
    </a>    <div class="navlinkera">
        <a href="index.php" class="navlinks">Home</a>
        <a href="experiences.php" class="navlinks">Ervaring</a>
        <a href="aboutus.php" class="navlinks">Over Ons</a>
        <a href="product.php" class="navlinks">Product</a>
    </div>

</nav>
<main>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $experienceName = htmlspecialchars($row["name"]);
            $url = './VR_experiences/' . strtolower(str_replace(' ', '_', $experienceName)) . '.html';
            echo "<a href='$url'>";
            echo "<div class='experience'>";
            echo "<h1>" . $experienceName . "</h1>";
            echo "<img src='" . htmlspecialchars($row["image_link"]) . "' alt='" . $experienceName . "' class='experienceImage'>";
            echo "</div>";
            echo "</a>";
        }
    }
    ?>
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