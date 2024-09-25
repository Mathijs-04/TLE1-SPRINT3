<?php
/** @var $db */
require_once "includes/database.php";

$first_name = '';
$last_name = '';
$email = '';
$experience = '';
$addreview = '';
$conform= '';
$rate='';

if (isset($_POST['submit'])) {
    $first_name = mysqli_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_escape_string($db, $_POST['last_name']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $experience = mysqli_escape_string($db, $_POST['experience']);
    $rate = mysqli_escape_string($db, $_POST['rate']);
    $addreview = mysqli_escape_string($db, $_POST['review']);

    $errors = [];
    if ($first_name == '') {
        $errors['first_name'] = 'dit veld is verplicht.';
    }
    if ($last_name == '') {
        $errors['last_name'] = 'dit veld is verplicht.';
    }
    if ($email == '') {
        $errors['email'] = 'dit veld is verplicht.';
    }
    if ($experience == '') {
        $errors['experience'] = 'dit veld is verplicht.';
    }
    if ($rate == '') {
        $errors['rate'] = 'dit veld is verplicht.';
    }
    if ($addreview == '') {
        $errors['review'] = 'dit veld is verplicht.';
    }

    if (empty($errors)) {
        //INSERT in DB
        $query = "INSERT INTO reviews (first_name, last_name, email, experience, rate, review)
                VALUES ('$first_name', '$last_name', '$email' , '$experience' , '$rate' , '$addreview')";
        $result = mysqli_query($db, $query);
        // If query succeeded
        if ($result) {
            // Redirect to login page
            $conform = 'een review is achtergelaten voor de ' . $experience . ' ervaring, door ' . $first_name. '. ' ;

            $first_name = '';
            $last_name = '';
            $email = '';
            $experience = '';
            $rate='';
            $addreview = '';

        } else {
            $errors['db'] = mysqli_error($db);
        }
    }
}
$query = "SELECT * FROM reviews";
$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$reviews = [];

while($row = mysqli_fetch_assoc($result))
{ $reviews[] = $row;
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
    <title>Review</title>
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
<header>
</header>
<main>
    <form action="" method="post">
        <div class="names">
            <div class="questionname">
                <label for="first_name">Voornaam:</label>
                <input type="text" id="first_name" name="first_name" value="<?= htmlentities($first_name) ?>" placeholder="Voornaam">
                <?= $errors['first_name'] ?? '' ?>
            </div>
            <div class="questionname">
                <label for="last_name">Achternaam:</label>
                <input type="text" id="last_name" name="last_name" value="<?= htmlentities($last_name) ?>" placeholder="Achternaam">
                <?= $errors['last_name'] ?? '' ?>
            </div>
        </div>

        <div class="question">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlentities($email) ?>" placeholder="e-mail">
            <?= $errors['email'] ?? '' ?>
        </div>

        <div class="question">
            <label for="experience">Ervaring:</label>
            <select id="experience" name="experience" value="<?= htmlentities($experience) ?>">
                <option value="barbecue">barbecue</option>
                <option value="strand">strand</option>
                <option value="fietsen">fietsen</option>
                <option value="concert">concert</option>
                <option value="bos">bos</option>
                <option value="meer">meer</option>
                <option value="markt">markt</option>
                <option value="wandeling">stads wandeling</option>
                <option value="overig">overig</option>
            </select>
            <?= $errors['experience'] ?? '' ?>
        </div>

        <div class="question">
            <label for="rate">cijfer:</label>
            <select id="rate" name="rate" value="<?= htmlentities($rate) ?>">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
            </select>
            <?= $errors['rate'] ?? '' ?>
        </div>

        <div class="open">
            <label for="review">Review:</label>
            <textarea id="review" rows="4" name="review"><?= htmlentities($addreview) ?></textarea>
            <?= $errors['review'] ?? '' ?>

        </div>

        <div class="checkbox1">
            <input type="checkbox" id="accept" name="accept" required>
            <label for="accept">Ik ga akkoord met de <a href="https://drive.google.com/file/d/1Dgpov7vXRdX2jVjCYHre-El7Ds2jDf0H/view" target="_blank">algemene voorwaarden</a></label>
        </div>

        <button class=confirm type="submit" name="submit">submit</button>

        <?= htmlentities($conform) ?>
    </form>


    <div class="cardoverview">
        <?php foreach ($reviews as $index => $review) { ?>
        <div class="card">
            <div class="cardstar">
                <h1><?php for ($x = 0; $x <=$review['rate'] - 1; $x++){
                        echo "<span style='font-size:40px;'>&#9734;</span>";
                    }?></h1>
                <h1> <?= $review['experience'] ?></h1>
            </div>
            <p><?= $review['review'] ?></p>
            <p>~<?= $review['first_name'] ?>~</p>
        </div>
        <?php } ?>
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