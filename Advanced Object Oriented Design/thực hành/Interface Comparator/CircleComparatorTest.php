<?php
include_once "Circle.php";
include_once "CircleComparator.php";

$circle1 = new Circle("circleOne",7);
$circle2 = new Circle("circleTwo",8);
$circleComparator = new CircleComparator();
var_dump($circleComparator->comparator($circle1,$circle2));
?>