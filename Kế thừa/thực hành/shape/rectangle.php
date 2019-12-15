<?php
    include_once "shape.php";
    class Rectangle extends Shape {
        private  $width;
        private $height;

        public function __construct($name,$width,$height)
        {
            parent::__construct($name);
            $this->height = $height;
            $this->width = $width;
        }

        public function  calculateArea(){
            return $this->width * $this->height;
        }

        public function calculatePerimeter(){
            return 2 * ($this->width + $this->height);
        }
    }
?>