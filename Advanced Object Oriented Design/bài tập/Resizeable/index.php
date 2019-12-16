<?php
include_once "RectangleResize.php";
include_once "CircleResize.php";
include_once "SquareResize.php";

$shapes[0] = new Circle("Circle1",20);
$shapes[1] = new Rectangle("Rectangle1",20,10);
$shapes[2] = new Square("Square1", 20);

echo "<strong>Before Resize :</strong> <br><br>";
foreach ($shapes as $shape) {
    echo $shape->name. " <br>";
    echo "Area is : ". $shape->calculateArea()."<br>";
    echo "Perimeter is :".$shape->calculatePerimeter()."<br><br>";
}

$shapeResize0 = new CircleResize();
$shapeResize1 = new RectangleResize();
$shapeResize2 = new SquareResize();

$per0 = mt_rand(0,100);
$per1 = mt_rand(0,100);
$per2 = mt_rand(0,100);

$shapeResize0->reszie($shapes[0],$per0);
$shapeResize1->reszie($shapes[1],$per1);
$shapeResize2->reszie($shapes[2],$per2);

echo "<strong>After Resize :</strong> <br><br>";
foreach ($shapes as $shape) {
    echo $shape->name. " <br>";
    echo "Area is : ". $shape->calculateArea()."<br>";
    echo "Perimeter is :".$shape->calculatePerimeter()."<br><br>";
}
echo "Percent respectively is : $per0, $per1, $per2";
?>