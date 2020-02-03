<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $severName = "localhost";
    $userName = "root";
    $passWord = "";
    $databaseName = "quan_ly_thu_vien";
    $connection = new PDO('mysql:host=' . $severName . ';dbname=' . $databaseName, $userName, $passWord)
    or die("lỗi kết đến sever");
    $delete = "DELETE FROM category WHERE id = 'id'";
    $del = $connection->query($delete) or die("lỗi kết nối");
    if ($del) {
        header("location:../index.php");
    }
}