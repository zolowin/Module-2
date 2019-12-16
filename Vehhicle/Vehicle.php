<?php
class Vehicle {
    protected $color;
    public $type;
    protected $colorNumber;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColorNumber($colorNumber)
    {
        $this->colorNumber = $colorNumber;
        return $this;
    }

    public function getColorinfo(){
        return "$this->color : $this->colorNumber";
    }
}

?>