<?php
require "Vehicle.php";
require "Car.php";
require "Plane.php";
require "Train.php";

$car1 = new Car("SUV", false);
$car1->setColor("black")
    ->setColorNumber("#000000")
    ->setOwner("Anh Tân")
    ->setHasTrunk(false);
//var_dump($car1);
echo "$car1->type car, has trunk is : ".json_encode($car1->getHasTrunk()).".<br>";
echo "This cas has color : colornumber is ".$car1->getColorinfo().".<br>";
echo "Owner is ".$car1->getOwner().".";
echo "<br><br>";

$plane1 = new Plane("Boeing");
$plane1->setOperator("VietNam")
    ->setCountry("Korea")
    ->setEngineCount(6)
    ->setColor("white")
    ->setColorNumber("FFFFFF");
//var_dump($plane1);
echo "$plane1->type plane, has ".$plane1->getEngineCount()." engine count.<br>";
echo "This plane has color : colornumber is ".$plane1->getColorinfo().".<br>";
echo "Fly from ".$plane1->getOperator()." to ".$plane1->getCountry().".";
echo "<br><br>";

$train1 = new Train("Shinkansen", 333);
$train1->setColor("black")
    ->setColorNumber("000000")
    ->setOperator("Japan");
//var_dump($train1);
echo "Train's type is $train1->type, color is ".$train1->getColor().".<br>";
//echo "Carcount is ".$train1->carCount.".<br>";
echo "Operator is ".$train1->getOperator().".";
echo "<br><br>";

?>
