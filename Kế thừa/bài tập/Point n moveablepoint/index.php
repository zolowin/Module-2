<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$p = new  Point();
echo $p->__toString();

$movePoint = new MoveablePoint(0, 0, 5, 5);
echo $movePoint->__toString();
$movePoint->move();
echo $movePoint->__toString();

?>