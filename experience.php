<?php
require_once 'includes/actions.php';

function getExperienceById($id)
{
    $experiences = [
        1 => [
            "experience" => "Forest Walk: Enjoy the Outdoors",
            "Image" => "./img/forest_walk_foto.webp",
            "information" => "Experience the calm of a forest walk in our Forest Walk Experience. Stroll along a soft path surrounded by tall trees and green leaves. As you walk, you can hear the gentle song of birds and feel the fresh air on your skin. The sun shines through the branches, creating a pleasant atmosphere. This is an ideal way to relax and simply enjoy the natural beauty around you. It’s the most ordinary experience, but one that gives you the chance to unwind and recharge.",
            "Expurl" => "",
        ],
        2 => [
            "experience" => "Office Life: Start Your Day Right",
            "Image" => "./img/office_life_foto.webp",
            "information" => "Start your day in a stylish, modern office space with a clear view of the city in our Office Life Experience. You grab a cup of coffee from a good coffee machine and sit down at your desk, ready to start your work. The space is quiet and organized, perfect for focusing on your tasks. It’s a simple, yet efficient work environment that helps you start your day well and stay productive. Enjoy the simplicity and focus this setting offers.",
            "Expurl" => "",
        ],
        3 => [
            "experience" => "Night Out with Friends: A Relaxed Evening Together",
            "Image" => "./img/night_out_foto.webp",
            "information" => "Enjoy a relaxed evening with friends on a rooftop terrace with a view of the city in our Night Out with Friends Experience. It’s an ordinary evening where you laugh, have conversations, and enjoy a drink with your friends while taking in the view and the atmosphere. The soft city lights and the relaxed environment make it a pleasant way to spend time together. It’s a simple, but delightful way to enjoy the fun and warmth of a night out.",
            "Expurl" => "",
        ],
        4 => [
            "experience" => "Relax Experience (Outdoor): Unwind by the Lake",
            "Image" => "./img/lake_foto.webp",
            "information" => "Enjoy a peaceful evening by the lake with our Relax Lake Experience. Imagine lying in a hammock between two trees as the sun sets, casting a soft, warm glow over the water. You hear the gentle sound of waves lapping against the shore, and you feel the relaxed atmosphere around you. It’s a simple, yet perfect way to unwind and take a break in nature. Leave the daily rush behind and experience the calm of a beautiful lake at sunset.",
            "Expurl" => "",
        ],
        5 => [
            "experience" => "Daily Life Experience (Outdoor): Discover a Charming Village Square",
            "Image" => "./img/morning_walk_foto.webp",
            "information" => "Start your day in a quiet village square with our Daily Life Morning Experience. You sit at an outdoor café table by a cozy bakery, enjoying a freshly brewed coffee and a crispy croissant. As you look around, you see the town slowly coming to life—people passing by, and the square filling with activity. It’s an ordinary morning, but it offers a charming and pleasant way to begin your day and enjoy a simple, yet delightful moment.",
            "Expurl" => "",
        ],
        6 => [
            "experience" => "Friends Experience (Outdoor): Enjoy a Beach Bonfire with Friends",
            "Image" => "./img/beach_foto.webp",
            "information" => "Experience the warmth of a Friends Beach Experience with a beach bonfire. You and your friends gather around a crackling fire as the sun sets, casting a warm glow in the sky. Music plays in the background, and you all laugh, talk, and enjoy each other's company while the waves gently crash on the shore. It’s a simple, yet joyful way to spend time together and savor a relaxed evening by the beach.",
            "Expurl" => "",
        ],
        7 => [
            "experience" => "Relax Experience (Outdoor): Unwind on the Mountaintop",
            "Image" => "./img/yoga_foto.webp",
            "information" => "Start your day with a peaceful Relax Yoga Experience on a mountaintop at sunrise. Imagine sitting on a yoga mat, meditating with a panoramic view of distant mountains and valleys. The fresh morning air surrounds you, and you hear the gentle sound of the wind rustling through the trees. It’s a simple, yet powerful way to calm your mind and enjoy the natural beauty and quietness around you.",
            "Expurl" => "",
        ],
        8 => [
            "experience" => "Daily Life Experience (Outdoor): Explore the Farmers’ Market",
            "Image" => "./img/market_foto.webp",
            "information" => "Experience the lively atmosphere of a Daily Life Experience at a sunny farmers' market. Walk between the stalls filled with fresh vegetables, fruits, and flowers. As you stroll past the colorful stands, you hear people chatting warmly and smell the delicious scent of fresh produce and baked goods. It’s an ordinary, but delightful way to start your day and enjoy the hustle and bustle of the market.",
            "Expurl" => "",
        ],
        9 => [
            "experience" => "Friends Experience (Outdoor): Enjoy an Outdoor Concert",
            "Image" => "./img/concert_foto.webp",
            "information" => "Feel the energy of a Friends Experience at an outdoor concert in a grassy field at sunset. You dance and enjoy live music with your friends, surrounded by other concertgoers. String lights hang around the stage, creating a festive atmosphere. It’s a simple, but lively way to be together and enjoy music and the excitement of a vibrant event.",
            "Expurl" => "",
        ],
        10 => [
            "experience" => "Relax Experience (Outdoor): Unwind by the River",
            "Image" => "./img/picknick_lake_foto.webp",
            "information" => "Relax with a Relax Picnic Experience in a peaceful riverside meadow. Imagine lying on a blanket in the shade of a tree, surrounded by tall grass and wildflowers. The gentle flow of the river ripples in the background, while birds softly sing their melodies in the distance. It’s a simple way to relax, enjoy nature, and soak in the calm of the moment.",
            "Expurl" => "",
        ],
        11 => [
            "experience" => "Daily Life Experience (Outdoor): Country Bike Ride",
            "Image" => "./img/bike_foto.webp",
            "information" => "Experience the peace of a Daily Life Experience with a leisurely bike ride along a tree-lined country road. You pedal slowly, taking in the open fields and distant hills, while the soft sound of the bike tires rolls over the gravel path. It’s an ordinary, but pleasant way to spend the day, admire the scenery, and take a break from the daily rush.",
            "Expurl" => "",
        ],
        12 => [
            "experience" => "Friends Experience (Outdoor): Backyard Barbecue",
            "Image" => "./img/barbecue_foto.webp",
            "information" => "Enjoy a Friends Experience with a relaxed backyard barbecue. You and your friends gather around the grill, preparing food while laughing and chatting. A game is played, and the sun sets slowly, with twinkling lights illuminating the garden. It’s a simple, yet enjoyable way to come together, share good company, and savor delicious food.",
            "Expurl" => "",
        ],
    ];

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
    <a href="experiences.php" class="goback"><img src="./img/go-back-2.png" alt="goback"></a>
    <a href="index.php" class="tohome"><img src="./img/expcorp.webp" alt="logo" class="logo"></a>
    <a href="index.php" class="gobackindex"><img src="./img/go-back-2.png" alt="goback"></a>
</nav>
<header>
</header>
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
</body>
</html>