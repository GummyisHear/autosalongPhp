<?php
require('config.php');
global $conn;

if (isset($_REQUEST['insert'])) {
    $query = $conn->prepare("INSERT INTO cars(model, description, year, mileage, price) VALUES (?,?,?,?,?)");
    $mudel = $_REQUEST['mudel'];
    $kirjeldus = $_REQUEST['kirjeldus'];
    $aasta = $_REQUEST['aasta'];
    $labisoit = $_REQUEST['labisoit'];
    $hind = $_REQUEST['hind'];
    $query->bind_param("ssiid", $mudel, $kirjeldus, $aasta, $labisoit, $hind);
    $query->execute();

    header("Location: ".$_SERVER["PHP_SELF"]);
}
