<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2d = new Point2D();
echo $point2d->__toString();
echo "<br>";
$point2d->setXY(15, 20);
echo $point2d->__toString();
echo "<br>";

$point3d = new Point3D(2,5);
echo $point3d->__toString();
echo "<br>";
$point3d->setZ(10);
echo $point3d->getZ();
echo "<br>";
$point3d->setXYZ(1,2,3);
echo $point3d->__toString();
?>