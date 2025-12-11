<?php
require('config.php');
global $conn;

if (isset($_REQUEST['insert'])) {
    $query = $conn->prepare("INSERT INTO cars(model, description, year, mileage, price, image) VALUES (?,?,?,?,?,?)");
    $mudel = $_REQUEST['mudel'];
    $kirjeldus = $_REQUEST['kirjeldus'];
    $aasta = $_REQUEST['aasta'];
    $labisoit = $_REQUEST['labisoit'];
    $hind = $_REQUEST['hind'];
    $image = $_REQUEST['pilt'];
    $query->bind_param("ssiids", $mudel, $kirjeldus, $aasta, $labisoit, $hind, $image);
    $query->execute();

    header("Location: ".$_SERVER["PHP_SELF"]);
}
