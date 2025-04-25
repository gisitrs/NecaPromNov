<?php

$hostName = "127.0.0.1:3306";
$dbUser = "root";
$dbPassword = "root";
$dbName = "marinkom_jos1";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}
$conn->set_charset("utf8mb4");
?>