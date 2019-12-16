<?php
    include_once "Circle.php";
    include_once "Cylinder.php";

    $circle = new Circle(20,'red');
    echo ($circle->__toString());
    echo "<br>";
    $cylinder = new Cylinder(20,'blue', '50');
    echo ($cylinder->__toString());
?>

