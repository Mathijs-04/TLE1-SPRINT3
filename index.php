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
    <a href="index.php">
        <img src="./img/expcorp.webp" alt="logo" class="navlogo">
    </a>
    <div class="navlinkera">
        <a href="index.php" class="navlinks">Home</a>
        <a href="experiences.php" class="navlinks">Ervaring</a>
        <a href="product.php" class="navlinks">Product</a>
        <a href="aboutus.php" class="navlinks">Over Ons</a>


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
            <p class="introP1">EXPCorp gebruikt virtual reality om het leven van ouderen in verzorgingstehuizen te verrijken. We bieden
                U nieuwe mogelijkheden en avonturen buiten hun dagelijkse omgeving. Ons doel is om leeftijd geen
                beperking te laten zijn in het ontdekken van de wereld. Zo creëren we bijzondere momenten voor
                senioren.</p>
            <p class="introP2">
                Wilt u meer weten over ons bedrijf en onze missie? Klik dan op de knop hieronder.
            </p>
        </div>
        <div>
            <button class="aboutUsButton" type="button" onclick="window.location.href = 'aboutus.php'">Over Ons</button>
        </div>
    </div>

    <div class="homeVragenDiv">
            <p>Bent U nog niet bekend met onze ervaringen? Doe dan deze test.</p>
            <img onclick="window.location.href = 'vragenlijst.php'" src="./img/goexperiences.png"
                 alt="Ga naar vragenlijst over ervaringen" id="inHomeBut">

    </div>

    <div class="experiences">
        <h2 class="experiencesTitle">Ervaringen</h2>
        <div class="experienceArticles">
                <article>
                    <img onclick="window.location.href = 'http://localhost/TLE1-SPRINT3/VR_experiences/egypt.php'" src="./VR_experiences/images/japan.webp" alt="Japanse tuin">
                    <h3 class="expTitle">Japan</h3>
                </article>
                <article>
                    <img onclick="window.location.href = 'http://localhost/TLE1-SPRINT3/VR_experiences/japan.php'" src="./VR_experiences/images/egypt.webp" alt="Egyptische woestijn">
                    <h3 class="expTitle">Egypte</h3>
                </article>

            <div class="homeButtonDiv">
                <div class="experiencesButton">
                    <p>Voor meer ervaringen</p>
                        <img onclick="window.location.href = 'experiences.php'" src="./img/goexperiences.png"
                             alt="Ga naar ervaringen overview" id="inHomeBut">
                </div>
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
            <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">Privacyverklaring</a>
            <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">Algemene voorwaarden</a>
            <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">Cookiebeleid</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>
</footer>
</body>
</html>