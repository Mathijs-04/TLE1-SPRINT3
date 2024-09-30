<?php
require_once 'includes/actions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

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

$experiences = [
    1 => [
        "experience" => "Mystieke Schoonheid van Navagio",
//        "Image" => "./img/Navagio_360.webp",
        "information" => "Beleef een prachtige reis naar een bijzondere plek, zonder je huis te verlaten. Stel je voor dat je op het strand staat van een baai op het eiland Zakynthos in Griekenland. Het heldere, blauwe water schittert, hoge rotsen omringen je, en in het zand ligt een oud scheepswrak. Met deze VR-ervaring kun je de rustige schoonheid van 'Shipwreck Bay' zelf ontdekken. Hoor het zachte geluid van de golven en zie de zon die schittert op het water. Geniet van de rust en de natuur, alsof je er echt bent. Deze ervaring is ideaal om even te ontspannen en iets nieuws te beleven. Maak een rustige reis naar dit mooie landschap, zonder dat je je huis uit hoeft..",
        "Expurl" => ""
    ],
    2 => [
        "experience" => "Panoramisch Uitzicht over Zakynthos",
//        "Image" => "./img/Zonsondergang_360.webp",
        "information" => "Beleef een magische zonsondergang op het prachtige eiland Zakynthos, zonder je huis te verlaten. Vanaf een eeuwenoude Venetiaanse wachttoren kijk je uit over het adembenemende landschap, terwijl de lucht oranje en roze kleurt en de zon langzaam ondergaat.Met deze VR-ervaring sta je midden in deze serene omgeving en voel je de rust van de natuur om je heen. Zie hoe de zon zachtjes verdwijnt achter de horizon en de eilanden baden in het laatste licht van de dag. Het panoramische uitzicht laat je de schoonheid van dit bijzondere moment volledig beleven.Of je nu van prachtige uitzichten houdt of gewoon even wilt ontspannen, deze ervaring biedt je een unieke reis naar een van de mooiste plekken van Griekenland, direct vanuit je eigen woonkamer.",
        "Expurl" => ""
    ],
    3 => [
        "experience" => "Verken de Trinity in Shasta-Trinity National Forest",
//        "Image" => "./img/Trinity_360.webp",
        "information" => "Stap in een wereld van rust en natuur, waar je de schoonheid van de Trinity-rivier kunt ervaren zonder je huis te verlaten. Deze kalme rivier slingert door het Shasta-Trinity National Forest in Californië, omringd door uitgestrekte bossen en groene heuvels. Met deze VR-ervaring kun je genieten van de serene waterstromen, de frisse lucht en de rustige geluiden van de natuur. Voel je alsof je langs de rivier wandelt, terwijl het water zachtjes kabbelt en de bomen zacht ruisen in de wind. Of je nu even wilt ontsnappen aan de drukte of gewoon wilt genieten van een vredig moment in de natuur, deze ervaring biedt je een ontspannen reis naar een prachtige plek. Ontdek de rust van de Trinity-rivier, allemaal vanuit het comfort van je eigen huis.",
        "Expurl" => ""
    ],
    4 => [
        "experience" => "Een Virtuele Reis door een Dynamische Haven",
//        "Image" => "./img/Harbor_360.webp",
        "information" => "Stap aan boord voor een unieke virtuele reis door Harbor City, een bruisende haven vol leven en activiteit. Met deze VR-ervaring kun je de prachtige haven en zijn omgeving verkennen, van de indrukwekkende schepen tot de levendige sfeer van de stad.Kijk om je heen en ontdek de verschillende facetten van het havenleven. Voel de energie van de stad terwijl je langs de kades wandelt, het geluid van zeewater en het geroezemoes van mensen om je heen. Deze ervaring biedt een kijkje in de dagelijkse activiteiten en de schoonheid van Harbor City.Of je nu meer wilt leren over de haven, de scheepvaartgeschiedenis wilt ontdekken, of gewoon wilt genieten van de uitzichten, deze ervaring brengt de dynamiek van Harbor City naar je toe, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meevoeren naar deze levendige bestemming.",
        "Expurl" => ""
    ],
    5 => [
        "experience" => "Ontdek Parijs",
//        "Image" => "./img/Paris_360.webp",
        "information" => "Stap binnen in de betoverende wereld van Parijs met deze unieke immersieve VR-ervaring. Verken de iconische bezienswaardigheden, van de majestueuze Eiffeltoren tot de charmante straatjes van Montmartre, en laat je onderdompelen in de rijke cultuur en geschiedenis van de stad.Met een interactieve kijkervaring kun je rondkijken en genieten van de adembenemende uitzichten die Parijs te bieden heeft. Hoor het zachte geruis van de stad, het gelach van mensen in de cafés, en de klanken van straatmuzikanten die de levendige sfeer van Parijs vastleggen. Of je nu een ervaren reiziger bent of de stad voor het eerst ontdekt, deze ervaring brengt de magie van Parijs naar je toe. Geniet van deze virtuele tour en laat je inspireren door de schoonheid en de charme van de Franse hoofdstad, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en ontdek de wonderen van Parijs.",
        "Expurl" => ""
    ],
    6 => [
        "experience" => "Ontdek de Schoonheid van een Traditionele Japanse Tuin",
//        "Image" => "./img/Japanese_360.webp",
        "information" => "Stap binnen in een serene wereld van schoonheid en harmonie met deze unieke VR-ervaring in de traditionele Japanse tuin van het Sumida-ku Taisho Fork House Museum. Deze prachtige tuin biedt een rustige ontsnapping aan de drukte van het dagelijks leven en laat je kennismaken met de rijke cultuur en esthetiek van Japan. Met de interactieve viewer kun je rondkijken en de verfijnde details van de tuin bewonderen, van de zorgvuldig aangelegde paden en de prachtig vormgegeven planten tot de traditionele architectuur die het landschap siert. Voel de kalmte om je heen en luister naar het rustgevende geluid van kabbelend water en fluitende vogels. Deze ervaring is perfect voor iedereen die geïnteresseerd is in Japanse cultuur of gewoon even wil ontspannen in een prachtige omgeving. Geniet van de schoonheid en de sereniteit van de traditionele Japanse tuin, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meevoeren naar deze betoverende plek.",
        "Expurl" => ""
    ],
    7 => [
        "experience" => "Ontdek de Kunstzalen van Statens Museum",
//        "Image" => "./img/Museum_360.webp",
        "information" => "Stap in de wereld van kunst en cultuur met deze unieke VR-ervaring! Verken Sal 217A van het Statens Museum for Kunst in Kopenhagen, en laat je omarmen door de schoonheid van de kunstwerken die deze ruimte sieren. Met een 360-graden fotografie kun je je onderdompelen in de indrukwekkende zalen van het museum, alsof je er zelf bent. Kijk om je heen, bewonder de details van de schilderijen, en voel de sfeer van de bijzondere tentoonstellingen. Of je nu een kunstliefhebber bent of gewoon nieuwsgierig, deze ervaring biedt je de kans om kunst van dichtbij te bekijken. Laat je inspireren door de prachtige ruimte en de rijke geschiedenis van het museum, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meevoeren in de wonderlijke wereld van Sal 217A.",
        "Expurl" => ""
    ],
    8 => [
        "experience" => "Verken de Pracht van het Bellagio",
//        "Image" => "./img/Bellagio_360.webp",
        "information" => "Stap binnen in de adembenemende lobby van het Bellagio Hotel in Las Vegas, waar kunst en luxe samenkomen. Met deze VR-ervaring kun je het beroemde Chihuly plafond bewonderen, dat bestaat uit duizenden kleurrijke glasbladeren die als een levendig kunstwerk boven je hoofd hangen. Voel je alsof je echt in de lobby bent terwijl je om je heen kijkt en de schitterende details van het plafond in je opneemt. De sprankelende kleuren en unieke vormen van het glas maken deze ruimte tot een onvergetelijke bezienswaardigheid. Deze ervaring is perfect voor iedereen die nieuwsgierig is naar de schoonheid van het Bellagio en de artistieke creativiteit van Dale Chihuly. Geniet van de magie van Las Vegas en laat je betoveren door dit unieke stukje kunst, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meevoeren in de prachtige wereld van het Bellagio.",
        "Expurl" => ""
    ],
    9 => [
        "experience" => "Verken Inside Pionir",
//        "Image" => "./img/Belgrado_360.webp",
        "information" => "Stap binnen in het hart van de sportcultuur van Belgrado met deze unieke VR-ervaring. Verken Inside Pionir, de iconische thuisbasis van Basketball Club Partizan, waar geschiedenis en passie samenkomen. Voel de opwinding van de sport terwijl je rondkijkt in deze indrukwekkende arena. Zie de tribunes gevuld met enthousiaste fans en de energie die door de lucht stroomt tijdens een spannende wedstrijd. Met elk detail dat je ontdekt, krijg je een gevoel van de rijke traditie en de trots die de club met zich meebrengt. Of je nu een fan bent van basketball of gewoon nieuwsgierig naar de sfeer in de arena, deze ervaring laat je de intensiteit van een livewedstrijd beleven, allemaal vanuit het comfort van je eigen huis. Zet je VR-bril op en laat je meeslepen in de wereld van Partizan.",
        "Expurl" => ""
    ]
];

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

<main>
    <?php if (array_key_exists($id, $embedUrls) && array_key_exists($id, $experiences)): ?>
        <div class='embed-container'>
            <iframe src="<?= $embedUrls[$id] ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class='experience-info'>
            <h2><?= $experiences[$id]['experience'] ?></h2>
<!--            <img src="--><?php //= $experiences[$id]['Image'] ?><!--" alt="--><?php //= $experiences[$id]['experience'] ?><!--">-->
            <p><?= $experiences[$id]['information'] ?></p>
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