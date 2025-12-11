<?php if (isset($_GET['code'])) {die(highlight_file(__FILE__, 1));}?>
<?php
require('config.php');
global $conn;
$query = $conn->prepare("SELECT id, model, description, year, mileage, price FROM cars");
$query->bind_result($id, $nimi, $kirjeldus, $year, $mileage, $price);
$query->execute();
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Autode Hinnakiri</title>
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

<div class="container">
<table class="price-table">
    <tr>
        <th>Mudel</th>
        <th>Kirjeldus</th>
        <th>Aasta</th>
        <th>Läbisõit (km)</th>
        <th>Hind (€)</th>
    </tr>

    <?php
    while ($query->fetch()) {
        ?>
        <tr>
            <td><?= $nimi?></td>
            <td><?= $kirjeldus ?></td>
            <td><?= $year ?></td>
            <td><?= $mileage ?></td>
            <td><?= $price ?></td>
        </tr>
        <?php
    }
    ?>

</table>
</div>

<footer>
    © 2025 Artjom Põldsaar
</footer>

</body>
</html>
