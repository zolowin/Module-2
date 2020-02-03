<?php
$severName = "localhost";
$userName = "root";
$passWord = "";
$databaseName = "quan_ly_thu_vien";
$connection = new PDO('mysql:host='.$severName.';dbname='.$databaseName,$userName,$passWord);
$query = "SELECT * FROM `category`";
$result = $connection->query($query);
foreach($result as $key => $result){
    echo "<tr>";
    echo "<td name = 'id'>" . $result["id"] . "</td>";
    echo "<td>" . $result["name"] . "</td>";
    echo "<td>" . $result["describes"] . "</td>";
    echo "<td>" . "<a href='delCate.php?id='></a>".
        "<button class='btn btn-success'>Edit</button>".
        "</td>";
    echo "</tr>";
}
?>