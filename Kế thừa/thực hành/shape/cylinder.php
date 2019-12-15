<?php
    include_once "circle.php";
    class Cylinder extends Circle {
        private $height;

        public function __construct($name,$radius,$height)
        {
            parent::__construct($name, $radius);
            $this->height = $height;
        }

        public function calculateArea(){
            return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
        }

        public function Volume() {
            return parent::calculateArea() * $this->height;
        }
    }
?>