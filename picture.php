<?php if (isset($_GET['code'])) {die(highlight_file(__FILE__, 1));}?>
<?php
require('config.php');
global $conn;

/* Fetch all cars for gallery */
$query = $conn->prepare("SELECT id, model, price, description, year, mileage, image FROM cars");
$query->bind_result($id, $model, $price, $desc, $year, $mileage, $image);
$query->execute();
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Pildigalerii</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>AutoSalon Pro</h1>
    <nav>
        <a href="index.php">Avaleht</a>
        <a href="price.php">Autod</a>
        <a href="picture.php">Pildigalerii</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<div class="container center">
    <h2>Meie Autode Galerii</h2>

    <section class="picture-grid">
        <?php while ($query->fetch()) { ?>
            <a href="?view=true&id=<?=$id?>">
                <img src="<?=$image?>" class="cover" alt="<?=$model?>">
            </a>
        <?php } ?>
    </section>
</div>

<?php
if (isset($_GET['view'])) {

    $car = $conn->prepare("SELECT id, model, description, year, mileage, price, image FROM cars WHERE id = ?");
    $car->bind_param("i", $_GET['id']);
    $car->bind_result($id, $model, $description, $year, $mileage, $price, $image);
    $car->execute();
    $car->fetch();
    ?>
    <section class="container" style="text-align: center; margin-top: 30px; border-top: 1px solid #444;">
        <h2 style="margin-bottom: 0px;"><?=$model?></h2>
        <p style="margin-top: 5px;"><?=$price?> €</p>

        <img src="<?=$image?>" alt="<?=$model?>"
             style="width: 350px; height: 250px; object-fit: cover; border-radius: 10px;">

        <p style="margin-top: 5px;"><?=$description?></p>
        <p>
            <strong>Aasta:</strong> <?=$year?><br>
            <strong>Läbisõit:</strong> <?=$mileage?> km
        </p>
    </section>

<?php } ?>

<footer>
    © 2025 Artjom Põldsaar
</footer>
</body>
</html>
