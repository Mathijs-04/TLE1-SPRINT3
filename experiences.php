<?php

if (isset($_POST['submit']))
{
    $categorie = $_POST['dropdown'];
} else {
    $categorie = '';
}
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
    <section>
        <h2>Experiences</h2>
        <form action="" method="post">
            <label for="dropdown"></label>
            <select name="dropdown" id="dropdown">
                <option value="<?= $categorie ?>"><?= htmlentities($categorie)?></option>
                <option value="Natuur">Natuur</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Reizen">Reizen</option>
            </select>

            <input type="submit" name="submit" value="Zoek catagorie">
        </form>
    </section>
    <section id="expTaps">
        <div>
            <h3>Natuur</h3>
            <ul>
                <li><p>Mystieke Schoonheid van Navagio</p><a href="experience.php?id=1">Klik hier</a></li>
                <li><p>Verken de Trinity in Shasta-Trinity National Forest</p><a href="experience.php?id=3">Klik hier</a></li>
                <li><p>Panoramisch Uitzicht over Zakynthos</p><a href="experience.php?id=2">Klik hier</a></li>
            </ul>
        </div>
        <div>
            <h3>Entertaiment</h3>
            <ul>
                <li><p>Ontdek de Kunstzalen van Statens Museum</p><a href="experience.php?id=7">Klik hier</a></li>
                <li><p>Verken de Pracht van het Bellagio</p><a href="experience.php?id=8">Klik hier</a></li>
                <li><p>Verken Inside Pionir</p><a href="experience.php?id=9">Klik hier</a></li>
            </ul>
        </div>
        <div>
            <h3>Reizen</h3>
            <ul>
                <li><p>Een Virtuele Reis door een Dynamische Haven</p><a href="experience.php?id=4">Klik hier</a></li>
                <li><p>Ontdek Parijs</p><a href="experience.php?id=5">Klik hier</a></li>
                <li><p>Ontdek de Schoonheid van een Traditionele Japanse Tuin</p><a href="experience.php?id=6">Klik hier</a></li>
            </ul>
        </div>



    </section>
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