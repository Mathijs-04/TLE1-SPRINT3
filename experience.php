<?php
require_once 'includes/database.php';
/* @var mysqli $db*/

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT *
    FROM experience
    WHERE id = $id";

    $result = mysqli_query($db, $query)
    or die('Error: '.mysqli_error($db));

    $experience = [];
    while($row = mysqli_fetch_assoc($result)){
        $experience[] = $row;
    }
    mysqli_close($db);
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
    <title>Walk in the park</title>
</head>
<body>

<nav>
    <a href="experiences.php" class="goback"><img src="./img/go-back-2.png" alt="goback"></a >
    <a href="index.php" class="tohome"><img src="./img/expcorp.webp" alt="logo" class="logo"></a>
    <a href="index.php" class="gobackindex"><img src="./img/go-back-2.png" alt="goback"></a >

</nav>
<header>

</header>
<main>
    <div>
        <div>
            <h2 class="titleExp"></h2>
        </div>
        <div id="expImgDiv">
            <img id="imgexp" src="img/<?= htmlentities($experience['photo']) ?>" alt="experience image">
        </div>
        <div id="different">
            <p class="context"></p>
        </div>
        <div id="videoLink">
        </div>
    </div>
</main>
</body>
</html>