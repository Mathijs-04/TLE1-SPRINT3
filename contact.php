<?php
$first_name = '';
$response = '';

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    if ($first_name == 41){
        $response= 'je kan abigail bereiken via abiailtoekimin@gmail.com';
    } else{
        $response= 'het antwoord '. $first_name . ' is niet goed';
    }
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
    <title>Over ons</title>
</head>
<body class="indexBody">

<nav>
    <a href="index.php">
        <img src="./img/expcorp.webp" alt="logo" class="navlogo">
    </a>
    <div class="navlinkera">
        <a href="index.php" class="navlinks">Home</a>
        <a href="experiences.php" class="navlinks">Ervaring</a>
        <a href="aboutus.php" class="navlinks">Over Ons</a>
        <a href="product.php" class="navlinks">Product</a>


    </div>

</nav>
<header>

</header>
<main class="aboutusmain">
    <h1 class="aboutushead1">op dit moment kan je online geen contact opnemen, voor vragen neem contact op met Abigail.</h1>
    <p class="aboutustext">om abigail te bereiken moet je de waarde van de letters van abigail haar naam bij elkaar optellen. dus A=1 B=2 C=3 enz.
    als je een antwoord hebt vul deze dan in het vak in.</p>



    <form action="" method="post">
        <div class="question">
            <label for="first_name">Secret Number:</label>
            <input type="text" id="first_name" name="first_name" value="" >

        </div>
        <button class=confirm type="submit" name="submit">submit</button>
        <?= $response ?? '' ?>
    </form>

</main>
<footer>
    <div>
        <img class="footerImg" src="./img/expcorpwhite.webp" alt="footerLogo">
        <div class="copyright">
            <p>©EXPCORP 2073</p>
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
