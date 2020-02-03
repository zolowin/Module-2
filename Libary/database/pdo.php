<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "libary";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connection ok!";

} catch (PDOException $e) {
    echo "Err: " . $e->getMessage();
}

//$conn = null;
?>