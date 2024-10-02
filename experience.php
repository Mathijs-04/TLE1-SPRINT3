<?php
require_once 'includes/actions.php';

function getExperienceById($id)
{


/*$experiences = [
    1 => [        "experience" => "Egypt",
       "Image" => "./VR_experiences/images/egypt.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ],
    2 => [
        "experience" => "Japan",
       "Image" => "./VR_experiences/images/japan.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ],
    3 => [
        "experience" => "Forest",
       "Image" => "./VR_experiences/images/forest.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ],
    4 => [
        "experience" => "Dessert",
        "Image" => "./VR_experiences/images/dessert.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ],
    5 => [
        "experience" => "Arches",
       "Image" => "./VR_experiences/images/arches.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ],
    6 => [
        "experience" => "Starry",
        "Image" => "./VR_experiences/images/starry.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ],
    7 => [
        "experience" => "Mushroom",
       "Image" => "./VR_experiences/images/mushroomforest.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ],
    8=> [
        "experience" => "Dreamland",
       "Image" => "./VR_experiences/images/dreamland.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ],
 //   9 => [
        "experience" => "Mysteryland",
       "Image" => "./VR_experiences/images/mysteryland.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ],

]; *//


    return $experiences[$id] ?? [];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $experience = getExperienceById($id);
}

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
    <title><?= htmlentities($experience['experience'] ?? 'Experience') ?></title>
</head>
<body>

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
        <div>
            <div>
                <h2 class="titleExp"><?= htmlentities($experience['experience'] ?? 'Experience') ?></h2>
            </div>
            <div id="expImgDiv">
                <img id="imgexp" src="<?= htmlentities($experience['Image'] ?? './img/default_image.webp') ?>"
                     alt="experience image">
            </div>
            <div id="containerExp">
                <div>
                    <h2 class="titleExp"><?= htmlentities($experience['experience'] ?? 'Experience') ?></h2>
                </div>
            </div>
            <div id="different">
                <p class="context"><?= htmlentities($experience['information'] ?? 'No information available.') ?></p>
            </div>
            <div id="videoLink">
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