<?php

$dbHost     = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "blogtomy";


$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>