<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/style.css" rel="stylesheet">
    <script src="./js/main.js"></script>
    <title>Home</title>
</head>
<body class="indexBody">

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
    <header class="homeBanner">
        <h1 class="homeTitle">EXP Corp.</h1>
    </header>

    <div class="underHeader">
        <div class="underHeaderLogo">
            <img src="./img/expcorpshield.webp" alt="shieldimg">
        </div>
        <div class="intro">
            <p>EXPCorp gebruikt virtual reality om het leven van ouderen in verzorgingstehuizen te verrijken. We bieden
                hen nieuwe mogelijkheden en avonturen buiten hun dagelijkse omgeving. Ons doel is om leeftijd geen
                beperking te laten zijn in het ontdekken van de wereld. Zo creëren we bijzondere momenten voor
                senioren.</p>
        </div>
        <div>
            <button class="aboutUsButton" type="button" onclick="window.location.href = 'aboutus.php'">Over Ons</button>
        </div>
    </div>

    <div class="experiences">
        <h2 class="experiencesTitle">Experiences</h2>
        <div class="experienceArticles">
            <article>
                <img src="./img/tropical-beach-view.webp" alt="beach">
            </article>
            <article>
                <img src="./img/forest-view.webp" alt="forest">
            </article>
            <div class="experiencesButton">
                <img onclick="window.location.href = 'experiences.php'" src="./img/goexperiences.png"
                     alt="goExperiences">
            </div>
        </div>
    </div>
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