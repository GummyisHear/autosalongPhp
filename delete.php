<?php
require('config.php');
global $conn;

if (isset($_REQUEST['delete'])) {
    $query = $conn->prepare("DELETE FROM cars WHERE id = ?");
    $id = $_REQUEST['delete'];
    $query->bind_param("i", $id);
    $query->execute();

    header("Location: ".$_SERVER["PHP_SELF"]);
}
