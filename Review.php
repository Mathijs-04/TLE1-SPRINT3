<?php

/** @var $db */
require_once "includes/database.php";


$first_name = '';
$last_name = '';
$email = '';
$experience = '';
$review = '';
$conform= '';



if (isset($_POST['submit'])) {
    $first_name = mysqli_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_escape_string($db, $_POST['last_name']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $experience = mysqli_escape_string($db, $_POST['experience']);
    $review = mysqli_escape_string($db, $_POST['review']);



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
    if ($review == '') {
        $errors['review'] = 'dit veld is verplicht.';
    }

    if (empty($errors)) {
        //INSERT in DB

        $query = "INSERT INTO reviews (first_name, last_name, email, experience, review)
                VALUES ('$first_name', '$last_name', '$email' , '$experience' , '$review')";

        $result = mysqli_query($db, $query);
        // If query succeeded
        if ($result) {
            // Redirect to login page
            $conform = 'een review is achtergelaten voor de ' . $experience . ' ervaring, door ' . $first_name. '. ' ;
            echo $conform;
            $first_name = '';
            $last_name = '';
            $email = '';
            $experience = '';
            $review = '';
        } else {
            $errors['db'] = mysqli_error($db);
        }
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
    <title>Review</title>
</head>
<body class="indexBody">

<nav>
    <img src="./img/EXPCorp.webp" alt="logo" class="navlogo">
    <div class="navlinkera">
        <a href="index.php" class="navlinks">home</a>
        <a href="experiences.php" class="navlinks">ervaring</a>
        <a href="aboutus.php" class="navlinks">over ons</a>
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
                <input type="text" id="first_name" name="first_name" value="<?= htmlentities($first_name) ?>" placeholder="VoorNaam">
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
            <label for="experience">Ervaring</label>
            <select id="experience" name="experience" value="<?= htmlentities($experience) ?>">
                <option value="barbecue">barbecue</option>
                <option value="strand">strand</option>
                <option value="fietsen">fietsen</option>
                <option value="concert">concert</option>
                <option value="bos">bos</option>
                <option value="meer">meer</option>
                <option value="markt">markt</option>
                <option value="wandeling">stads wandeling</option>
            </select>
            <?= $errors['experience'] ?? '' ?>
        </div>

        <div class="open">
            <label for="review">Review:</label>
            <textarea id="review" rows="10" name="review"><?= htmlentities($review) ?></textarea>
            <?= $errors['review'] ?? '' ?>

        </div>

        <div class="checkbox1">
            <input type="checkbox" id="accept" name="accept" required>
            <label for="accept">Ik ga akkoord met de algemene voorwaarden</label>
        </div>

        <button class=confirm type="submit" name="submit">submit</button>

        <?= htmlentities($conform) ?>
    </form>

</main>
<footer>
    <p>©EXPCORP 2073</p>
</footer>
</body>
</html>