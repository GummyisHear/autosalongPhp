<?php
require('config.php');
global $conn;

if (isset($_REQUEST['edit']) && isset($_REQUEST['mudel'])) {
    $query = $conn->prepare("UPDATE cars
    SET model=?,description=?,year=?,mileage=?,price=?,image=?
    WHERE id=?");
    $id = $_REQUEST['edit'];
    $mudel = $_REQUEST['mudel'];
    $kirjeldus = $_REQUEST['kirjeldus'];
    $aasta = $_REQUEST['aasta'];
    $labisoit = $_REQUEST['labisoit'];
    $hind = $_REQUEST['hind'];
    $image = $_REQUEST['pilt'];
    $query->bind_param("ssiidsi", $mudel, $kirjeldus, $aasta, $labisoit, $hind, $image, $id);
    $query->execute();

    header("Location: ".$_SERVER["PHP_SELF"]);
}
