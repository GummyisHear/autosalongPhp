<?php

// localhost

$servername = "localhost";
$username = "artjompoldsaar";
$password = "1234";
$dbname = "artjompoldsaar";



// zone.ee
/*
$servername = "d141139.mysql.zonevs.eu";
$username = "d141139_artjompoldsaar";
$password = "PoLe!0PoLe!0123";
$dbname = "d141139_phpandmebaas";
*/

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");