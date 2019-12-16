<?php
include_once "ComparableCircle.php";

$circle1 = new ComparableCircle("circle1",8);
$circle2 = new ComparableCircle("circle2",5);

var_dump($circle1->compareTo($circle2));
?>