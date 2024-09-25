<?php

if (isset($_POST['submit']))
{
    $categorie = $_POST['dropdown'];
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
    <img src="./img/expcorp.webp" alt="logo" class="navlogo">
    <div class="navlinkera">
        <a href="index.php" class="navlinks">Home</a>
        <a href="experiences.php" class="navlinks">Ervaring</a>
        <a href="aboutus.php" class="navlinks">Over Ons</a>
        <a href="Review.php" class="navlinks">Review</a>


    </div>

</nav>
<main>
    <section>
        <h2>Experiences</h2>
        <form action="experiences.php" method="post">
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
        <div class="expTap">
            <h3></h3>
            <a href="">Klik hier</a>
        </div>
        <div class="expTap">
            <h3></h3>
            <a href="">Klik hier</a>
        </div>
        <div class="expTap">
            <h3></h3>
            <a href="">Klik hier</a>
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
            <a href="#">Privacyverklaring</a>
            <a href="#">Algemene voorwaarden</a>
            <a href="#">Cookiebeleid</a>
            <a href="#">Contact</a>
        </div>
    </div>
</footer>
</body>
</html>