<?php
    include_once "shape.php";
    class Circle  extends Shape {
        private  $radius;

        public function __construct($name,$radius)
        {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function calculateArea(){
            return $this->radius ** 2 * pi();
        }

        public function calculatePerimeter(){
            return $this->radius * 2 * pi();
        }
    }
?>