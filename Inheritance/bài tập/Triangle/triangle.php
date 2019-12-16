<?php
include_once "shape.php";

class Triangle extends Shape
{
    private $side1;
    private $side2;
    private $side3;
    private $color;

    public function __construct($name, $side1 = 1.0, $side2 = 1.0, $side3 = 1.0, $color = "white")
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->color = $color;
    }

    /**
     * @return double
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return double
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return double
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param double $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @param double $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @param double $side3
     */
    public function setSide3 ($side3)
    {
        $this->side3 = $side3;
    }

    public function getPerimeter ()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getArea()
    {
        $p = $this->getPerimeter() / 2;
        return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
    }

    public function __toString()
    {
        return "Triangle " . parent::getName() . " has sides ($this->side1,$this->side2,$this->side3), color is $this->color. <br>
                Perimeter is : " . $this->getPerimeter() . "<br> Area is :" . $this->getArea();
    }

}

?>