<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$shapes[0] = new Circle("Circle1",20);
$shapes[1] = new Rectangle("Rectangle1",20,10);
$shapes[2] = new Square("Square1", 20);

foreach ($shapes as $shape) {
    echo $shape->name. " <br>";
    echo "Area is : ". $shape->calculateArea()."<br>";
//    echo "Perimeter is :".$shape->calculatePerimeter()."<br>";
    if($shape instanceof Square) {
        $shape->howToColor();
    }
    echo "<br><br>";
}

?>