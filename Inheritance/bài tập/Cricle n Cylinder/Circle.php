<?php
class Circle
{
    private $radius;
    private $color;

    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function  getArea() {
        return 2 * pi() * $this->radius ** 2;
    }

    public function  getPerimeter() {
        return 2 * pi() * $this->radius;
    }

    public function __toString()
    {
        return "Circle has radius is $this->radius, color is $this->color, area is " .$this->getArea(). ", perimeter is ".$this->getPerimeter() ;
    }
}
?>