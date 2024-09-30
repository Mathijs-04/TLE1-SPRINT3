<?php
/** @var $db */
require_once "database/db_connection.php";

// Get product_id from URL
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Fetch product data
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = mysqli_query($db, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);
} else {
    $error = "Product not found";
}

// Fetch next and previous product IDs
$prev_sql = "SELECT id FROM products WHERE id < $product_id ORDER BY id DESC LIMIT 1";
$next_sql = "SELECT id FROM products WHERE id > $product_id ORDER BY id ASC LIMIT 1";

$prev_result = mysqli_query($db, $prev_sql);
$next_result = mysqli_query($db, $next_sql);

$prev_id = $prev_result && mysqli_num_rows($prev_result) > 0 ? mysqli_fetch_assoc($prev_result)['id'] : null;
$next_id = $next_result && mysqli_num_rows($next_result) > 0 ? mysqli_fetch_assoc($next_result)['id'] : null;
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
    <title><?php echo htmlentities($product['title'])?></title>
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
    <div class="product">
        <div class="productImage">
            <img src="<?php echo htmlentities($product['img'])?>" alt="<?php echo htmlentities($product['title'])?>">
        </div>
        <div class="productInfo">
            <h1 class="productName"><?php echo htmlentities($product['title'])?></h1>
            <p><?php echo htmlentities($product['description'])?></p>
            <button class="productButton" type="button" >Koop nu</button>
        </div>
        <div class="navigation">
            <?php if ($prev_id): ?>
                <a href="product.php?id=<?php echo $prev_id; ?>" class="navArrow"><</a>
            <?php endif; ?>
            <?php if ($next_id): ?>
                <a href="product.php?id=<?php echo $next_id; ?>" class="navArrow">></a>
            <?php endif; ?>
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