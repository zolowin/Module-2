<?php
include_once 'Circle.php';

class Cylinder extends Circle
{
    private $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getArea()
    {
        return parent::getArea() * 2 + parent::getPerimeter() * $this->height;
    }

    public function getVolume()
    {
        return parent::getArea() * $this->height;
    }

    public function __toString()
    {
        return "Cynlinder has radius is " . parent::getRadius() . ", color is " . parent::getColor() . ", height is $this->height." .
            "<br> Area is" . $this->getArea() . ", volume is " . $this->getVolume();
    }
}