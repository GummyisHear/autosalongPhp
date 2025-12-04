<?php
require('config.php');
global $conn;

include('insert.php');
include('delete.php');
include('update.php');

$query = $conn->prepare("SELECT * FROM cars");
$query->bind_result($id, $nimi, $kirjeldus, $year, $mileage, $price);
$query->execute();

?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Admin Paneel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>AutoSalon Pro</h1>
    <nav>
        <a href="index.php">Avaleht</a>
        <a href="price.php">Autod</a>
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
            <th></th>
            <th></th>
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
                <td class="button-cell"><a class="admin-button" href="?delete=<?=$id?>">Kustuta</a></td>
                <td class="button-cell"><a class="admin-button" href="?edit=<?=$id?>">Muuda</a></td>
            </tr>
            <?php
        }
        ?>

    </table>

    <?php
        if (isset($_REQUEST['edit']) && !isset($_REQUEST['mudel'])) {
            include('editForm.php');
        }
        else {
            include('insertForm.php');
        }
    ?>
</div>

<footer>
    © 2025 Artjom Põldsaar
</footer>
</body>
</html>
